<?php

namespace App\Http\Controllers;

use App\Models\AdminContact;
use App\Models\Message;
use App\Models\UserReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = DB::table('messages')->where('to_id', Auth::user()->id)->get()->sortByDesc('created_at');
        // dd($messages);
        $unread_count = (DB::table('messages')
            ->where('to_id', Auth::user()->id)
            ->where('status', 'unread'))->count();
        // dd($unread_count);
        return view('pages.tutor.message', compact('messages', 'unread_count'));
    }

    public function markRead($id)
    {
        DB::table('messages')->where('id', $id)->update(['status' => 'read']);
        return redirect()->back();
    }

    public function delete_message($id)
    {
        DB::table('messages')->where('id', $id)->delete();
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric'
        ]);

        $data = request()->except(['_token']);
        if (Auth::check()) {
            $data['from_id'] = Auth::user()->id;
        }
        // dd($data);
        Message::create($data);
        return redirect()->back()->withSuccess('Message sent!');
    }

    public function adminMessage(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric'
        ]);

        $data = request()->except(['_token']);
        if (Auth::check()) {
            $data['from_id'] = Auth::user()->id;
        }
        // dd($data);
        AdminContact::create($data);
        return redirect()->back()->withSuccess('Thanks. We got your message. It will be checked ASAP.');
    }

    public function userReport(Request $request)
    {
        $data = request()->except(['_token']);
        if (Auth::check()) {
            $data['report_by'] = Auth::user()->id;
        }
        // dd($data);
        UserReport::create($data);
        return redirect()->back()->withSuccess('User report success!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}