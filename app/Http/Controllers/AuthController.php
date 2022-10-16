<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Tutor;
use Illuminate\Support\Facades\Auth;

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
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registerView()
    {
        return view('pages.register');
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

        return redirect("/")->withSuccess('Great! You have Successfully registered.');
    }

    public function updateUser(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' . Auth::user()->id,
            'password' => 'nullable|min:6',
            'phone' => 'required',
            'gender' => 'required',
        ]);
        
        $data = request()->except(['_token']);
        if ($data['password']) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        if($request->file('image')){
            $imageName = time().'.'.$request->image->extension();
            // Public Folder
            $request->image->move(public_path('images'), $imageName);
            $data['image']= $imageName;
            // dd($data['image']);
            User::where('id', Auth::user()->id)->update($data);
        }
        else{

            User::where('id', Auth::user()->id)->update($data);
        }

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

            if (Auth::user()->user_type == 'tutor') {
                $query = DB::table('tutors');
                $tutor = $query->where('user_id', Auth::user()->id)->first();

                $id = $tutor->id;
                $user = Auth::user();

                return view('pages.tutor.profile', compact('id', 'tutor', 'user'));
            }
            $id = Auth::user()->id;
            $user = Auth::user();

            return view('pages.tutor.profile', compact('id', 'user'));
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
}
