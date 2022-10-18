<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tutor;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            // dd(Auth::user()->id);
            $tutors = DB::table('users')
            ->whereNot('users.id', Auth::user()->id)
            ->select('users.*', 'tutors.*')
            ->join('tutors', 'tutors.user_id', '=', 'users.id')
            ->get();
            return view('pages.home', compact('tutors'));
        }
        $tutors = DB::table('users')
            ->select('users.*', 'tutors.*')
            ->join('tutors', 'tutors.user_id', '=', 'users.id')
            ->get();
        // dd($tutors);

        return view('pages.home', compact('tutors'));
    }
}
