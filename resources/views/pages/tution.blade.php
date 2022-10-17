@extends('layouts.default')

@section('content')

<div class="container padding-bottom-3x mb-1 mt-4">
    <div class="widget-title">
        <div class="text-left">Available Tuitions ({{ count($tutions) }})</div>
    </div>
    <div class="row">
        <!-- Blog Posts-->
        @foreach($tutions as $tution)
        <div class="col-xl-6 col-lg-6 order-lg-2">

            <div class="card mb-30">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Tuition ID #</td>
                                <td>{{ $tution->id}}</td>
                            </tr>
                            <tr>
                                <td>Class/ Subject:</td>
                                <td>Class {{ $tution->class }} , {{ $tution->subject }}</td>
                            </tr>
                            <tr>
                                <td>Location:</td>
                                <td>{{ $tution->location }}, {{ $tution->address }} </td>
                            </tr>
                            <tr>
                                <td>Days:</td>
                                <td>{{ $tution->days_per_week }} days/week</td>
                            </tr>
                            <tr>
                                <td>Salary Range:</td>
                                <td>{{ $tution->salary }}(+/-) tk/month</td>
                            </tr>
                        </tbody>
                    </table>
                    @if($tution->user_id)
                    <div style="float: left;"> <a href="/user/{{ $tution->user_id }}" class="btn btn-sm btn-outline-primary m-0">View Profile</a></div>
                    @endif
                    <div class="text-right"> Posted on: {{ $tution->created_at }} </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @stop