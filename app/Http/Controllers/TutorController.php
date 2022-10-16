<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTutorRequest;
use App\Http\Requests\UpdateTutorRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTutorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTutorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function show(Tutor $tutor)
    {
        // $tutor = DB::table('tutors')->where('id', $tutor->id)->get()->first();
        // dd($tutors);
        $user = DB::table('users')
            ->select('users.*', 'tutors.*')
            ->join('tutors', 'tutors.user_id', '=', 'users.id')
            ->where('tutors.id', $tutor->id)->get()->first();
        return view('pages.tutor.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutor $tutor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTutorRequest  $request
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTutorRequest $request, Tutor $tutor)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutor $tutor)
    {
        //
    }

    public function searchTutor()
    {
        return view('pages.search_tutor');
    }

    public function searchTutorResult(Request $request)
    {
        $district = $request->input('district');
        $area = $request->input('area');
        $medium = $request->input('medium');
        $class = $request->input('class');
        $subject = $request->input('subject');

        $query = DB::table('tutors');

        if ($district)
            $query = $query->where('district', $district);

        if ($area)
            $query = $query->where('area', $area);

        if ($medium)
            $query = $query->where('medium', $medium);

        if ($class)
            $query = $query->where('class', $class);

        $tutors = $query->get();

        return view('pages.search_tutor_result', ['tutors' => $tutors]);
    }


    public function requestTutor()
    {
        return view('pages.request_tutor');
    }

}