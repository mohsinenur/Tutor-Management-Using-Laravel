@extends('layouts.default')

@section('content')

<div class="container padding-bottom-2x mb-2">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show text-center margin-bottom-1x"><span class="alert-close" data-dismiss="alert"></span><i class="icon-help"></i>&nbsp;&nbsp;<strong>Success alert:</strong> {{ $message }}</div>
    @endif
    <div class="row">
        <div class="col-lg-8 col-md-8 order-md-1">
            <h6 class="text-muted text-normal text-uppercase">
                TUTOR PROFILE
            </h6>
            <hr class="margin-bottom-1x">
            <div class="product-card product-list"><a class="product-thumb" href="#">
                    <img src="{{ url('images/'.$user->image) }}" alt="User">
                </a>
                <div class="product-info">
                    <h3 style="color: #0da9ef">{{ $user->name }}
                    </h3>
                    <h4 class="product-price">
                        ID # {{ $user->user_id }}
                    </h4>
                    <p>
                        <strong>Qualification:</strong> {{ $user->qualification }}
                    </p>
                    <p>
                        <strong>Area Covered: {{ $user->area }}</strong>
                    </p>
                    <p>
                        <strong>Teaching:</strong> {{ $user->subject }}
                    </p>
                    <p>
                        <strong>Phone:</strong> {{ $user->phone }}
                    </p>
                    <p>
                        <strong>Email:</strong> {{ $user->email }}
                    </p>
                </div>
            </div>
            <h6 class="text-muted text-normal">
                Tuition Info:
            </h6>
            <hr class="margin-bottom-1x">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Expected Minimum Salary</td>
                        <td>{{ $user->salary }} tk/month</td>
                    </tr>
                    <tr>
                        <td>Current Status for Tuition:</td>
                        <td>{{ $user->status }}</td>
                    </tr>
                    <tr>
                        <td>Days per week:</td>
                        <td>{{ $user->days_per_week }} days/week </td>
                    </tr>
                    <tr>
                        <td>Preffered Tutoring Style:</td>
                        <td>{{ $user->teaching_style }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4 col-md-4 order-md-2">
            <h6 class="text-muted text-normal text-uppercase">Message this Tutor</h6>
            <hr class="margin-bottom-1x">
            <form method="POST" action="{{ url('create-message') }}">
                @csrf
                <input type="hidden" name="to_id" value="{{ $user->user_id }}">
                <div class="form-group">
                    <label for="validationCustom01">Full name</label>
                    @if (Auth::user())
                    <input class="form-control" type="text" required name="fullname" value="{{Auth::user()->name}}">
                    @else
                    <input class="form-control" type="text" required name="fullname">
                    @endif
                </div>
                <div class="form-group">
                    <label for="validationCustom02">Mobile</label>
                    @if (Auth::user())
                    <input class="form-control" type="text" required name="phone" value="{{Auth::user()->phone}}">
                    @else
                    <input class="form-control" type="text" minlength="11" maxlength="11" required name="phone">
                    @endif
                </div>
                <div class="form-group">
                    <label for="validationCustom03">Email</label>
                    @if (Auth::user())
                    <input class="form-control" type="text" required name="email" value="{{Auth::user()->email}}">
                    @else
                    <input class="form-control" type="text" required name="email">
                    @endif
                </div>
                <div class="form-group">
                    <label for="user_type">Select Type</label>
                    <select name="user_type" class="form-control" id="select-input">
                        @if (Auth::user())
                        <option selected value="{{Auth::user()->user_type}}">{{Auth::user()->user_type}}</option>
                        @else
                        <option selected disabled value="">Select one</option>
                        <option value="student">Student</option>
                        <option value="parent">Parent</option>
                        <option value="tutor">Tutor</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="textarea-input">Details</label>
                    <textarea class="form-control" id="textarea-input" name="message" rows="2"></textarea>
                </div>
                <div class="row">
                    <button class="btn btn-primary col-md-6" style="float: left;" type="submit">Send Message</button>
                    <button class="btn btn-danger col-md-6" type="button" data-toggle="modal" data-target="#modalreport" style="float: right;">Report this user</button>
                </div>
            </form>

            <div class="modal fade show" id="modalreport" tabindex="-1" role="dialog" style="padding-right: 17px; display: none;" aria-modal="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"></h4>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <form method="POST" action="{{ url('user-report') }}">
                            <div class="modal-body">
                                <h6 class="text-muted text-normal text-uppercase">Report this User</h6>
                                <hr class="margin-bottom-1x">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $user->user_id }}">
                                <div class="form-group">
                                    <label for="textarea-input">Report Reason(s)</label>
                                    <textarea class="form-control" id="textarea-input" name="reason" rows="2" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-outline-secondary btn-sm" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-danger btn-sm" type="submit">Submit Report</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop