<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tutor;

class HomeController extends Controller
{
    public function index()
    {

        $tutors = DB::table('users')
            ->select('users.*', 'tutors.*')
            ->join('tutors', 'tutors.user_id', '=', 'users.id')
            ->get();
        // dd($tutors);

        return view('pages.home', compact('tutors'));
    }
}
