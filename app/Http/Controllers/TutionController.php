<?php

namespace App\Http\Controllers;

use App\Models\Tution;
use App\Http\Requests\StoreTutionRequest;
use App\Http\Requests\UpdateTutionRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutions = DB::table('tutions')
        ->select('*')
        ->where('status', 'available')->get();
        ;
        // dd($tutions);
        return view('pages.tution', compact('tutions'));
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
        $request->validate([
            'full_name' => 'required',
            'mobile' => 'required',
        ]);
        // dd($request);
        if (Auth::check()) {
            $request['user_id'] = Auth::user()->id;
        }
        
        Tution::create($request->all());
        return redirect()->back()
            ->with('success', 'Turor request successfully.');
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