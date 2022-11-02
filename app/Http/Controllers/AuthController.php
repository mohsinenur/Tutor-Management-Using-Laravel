<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Tutor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('pages.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                ->withSuccess('Login in success.');
        }

        return redirect("login")->withErrors('Login details are not valid');
    }

    public function registerView()
    {
        return view('pages.register');
    }

    public function forgotPassword()
    {
        return view('pages.forgot_password');
    }

    public function postForgotPassword(Request $request)
    {

        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $otp = rand(10000, 99999);

        $data['otp'] = $otp;

        // Mail::raw('Here is your OTP: ' . str($otp), function ($request, $message) {
        //     $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        //     $message->to($request->email);
        // });

        User::where('email', $request->email)->update($data);

        return redirect()->intended('/reset-password')
            ->withSuccess('OTP has been send to your email');
    }

    public function resetPassword()
    {
        return view('pages.reset_password');
    }

    public function postResetPassword(Request $request)
    {

        $request->validate([
            'otp' => 'required|numeric',
            'password' => 'required|min:3',
            'password_confirmation' => 'same:password',
        ]);

        $data['password'] = Hash::make($request['password']);

        $reset = User::where('otp', $request->otp)->update($data);

        if ($reset) {
            return redirect()->intended('/')
                ->withSuccess('Password update successful');
        }

        return redirect("reset-password")->withErrors('Invalid OTP');
    }

    public function postRegistration(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'user_type' => 'required'
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $user_obj = User::create($data);

        if ($data['user_type'] == 'tutor') {
            // dd($user_obj['id']);
            $tutor = [
                'user_id' => $user_obj['id'],
            ];
            Tutor::create($tutor);
        };


        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        }

        return redirect("my-profile")->withSuccess('Great! You have Successfully registered.');
    }

    public function updateUser(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,
            'password' => 'nullable|min:6',
            'phone' => 'nullable|numeric',
            'gender' => 'nullable',
            'status' => 'nullable',
        ]);

        $data = request()->except(['_token']);
        if ($data['password']) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        if ($request->file('image')) {
            $imageName = time() . '.' . $request->image->extension();
            // Public Folder
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
            // dd($data['image']);
            User::where('id', Auth::user()->id)->update($data);
        }

        User::where('id', Auth::user()->id)->update($data);

        return redirect("my-profile")->withSuccess('Profile updated!');
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }


    public function myProfile()
    {
        if (Auth::check()) {
            $unread_count = (DB::table('messages')
                ->where('to_id', Auth::user()->id)
                ->where('status', 'unread'))->count();

            if (Auth::user()->user_type == 'tutor') {
                $query = DB::table('tutors');
                $tutor = $query->where('user_id', Auth::user()->id)->first();

                $id = $tutor->id;
                $user = Auth::user();

                return view('pages.tutor.profile', compact('id', 'tutor', 'user', 'unread_count'));
            }
            $id = Auth::user()->id;
            $user = Auth::user();
            $tutions = DB::table('tutions')
                ->select('*')
                ->where('user_id', Auth::user()->id)->get()->sortByDesc('created_at');

            return view('pages.tutor.profile', compact('id', 'user', 'unread_count', 'tutions'));
        }
        return redirect('login')->with('Error', 'Please log in first!');
    }

    public function updateTutor(Request $request)
    {
        $data = request()->except(['_token']);
        // dd($data);

        Tutor::where('user_id', Auth::user()->id)->update($data);

        return redirect("my-profile")->withSuccess('Profile updated!');
    }

    public function userProfile($id)
    {
        $user = DB::table(('users'))->where('id', $id)->first();
        // dd($user);
        return view('pages.user_profile', compact('user'));
    }
}