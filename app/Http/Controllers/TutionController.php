<?php

namespace App\Http\Controllers;

use App\Models\Tution;
use App\Http\Requests\StoreTutionRequest;
use App\Http\Requests\UpdateTutionRequest;

class TutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.tution');
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
     * @param  \App\Http\Requests\StoreTutionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTutionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tution  $tution
     * @return \Illuminate\Http\Response
     */
    public function show(Tution $tution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tution  $tution
     * @return \Illuminate\Http\Response
     */
    public function edit(Tution $tution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTutionRequest  $request
     * @param  \App\Models\Tution  $tution
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTutionRequest $request, Tution $tution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tution  $tution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tution $tution)
    {
        //
    }
}