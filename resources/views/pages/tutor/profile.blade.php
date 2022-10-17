@extends('layouts.default')

@section('content')

<div class="container padding-bottom-3x mb-2">
    <div class="row">
        <div class="col-lg-4">
            <aside class="user-info-wrapper">
                <div class="user-cover" style="background-image: url('assets/img/account/user-cover-img.jpg');">
                    <div class="info-label" data-toggle="tooltip" title="" data-original-title="User is {{Auth::user()->status}}"><i class="icon-medal"></i>{{Auth::user()->status}}</div>
                </div>
                <div class="user-info">
                    <div class="user-avatar"><a class="edit-avatar" href="#"></a><img src="{{ url('images/'.$user->image) }}" alt="User"></div>
                    <div class="user-data">
                        <h4>{{ Auth::user()->name }}</h4><span>Joined {{ date('d-m-Y', strtotime(Auth::user()->created_at)) }}</span>
                    </div>
                </div>
            </aside>
            <nav class="list-group"><a class="list-group-item with-badge" href="/message"><i class="icon-bag"></i>Message<span class="badge badge-primary badge-pill">{{count($messages)}}</span></a><a class="list-group-item active" href="/my-profile"><i class="icon-head"></i>Profile</a></nav>
        </div>
        <div class="col-lg-8">
            <div class="product-info">
                <h3 style="color: #0da9ef">{{ Auth::user()->name }}
                    @if( Auth::user()->user_type == 'tutor')
                    <button class="btn btn-sm btn-outline-success" type="button" data-toggle="modal" data-target="#modalProfile">Edit Profile</button>
                    @endif
                    <button class="btn btn-sm btn-outline-primary" type="button" data-toggle="modal" data-target="#modalSettings">Edit Settings</button>
                </h3>
                <h4 class="product-price">
                    ID # {{ Auth::user()->id }}
                </h4>
                @if( Auth::user()->user_type == 'tutor')
                <p>
                    <strong>Qualification:</strong> {{Auth::user()->qualification}}
                </p>
                <p>
                    <strong>Area Covered: {{ $tutor->area }}</strong>
                </p>
                <p>
                    <strong>Teaching:</strong> {{ $tutor->subject }}
                </p>
                @endif
                <p>
                    <strong>Phone:</strong> {{ Auth::user()->phone }}
                </p>
                <p>
                    <strong>Email:</strong> {{ Auth::user()->email }}
                </p>
            </div>

            @if( Auth::user()->user_type == 'tutor')
            <h6 class="text-muted text-normal">
                Tuition Info:
            </h6>
            <hr class="margin-bottom-1x">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Expected Minimum Salary</td>
                        <td>{{ $tutor->salary }} tk/month</td>
                    </tr>
                    <tr>
                        <td>Current Status for Tuition:</td>
                        <td>{{ Auth::user()->status }}</td>
                    </tr>
                    <tr>
                        <td>Days per week:</td>
                        <td>{{ $tutor->days_per_week }} days/week </td>
                    </tr>
                    <tr>
                        <td>Preffered Tutoring Style:</td>
                        <td>{{ $tutor->teaching_style }}
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>

@if( Auth::user()->user_type == 'tutor')
<div class="modal fade show" id="modalProfile" tabindex="-1" role="dialog" style="display: none; padding-right: 17px;" aria-modal="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Profile</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form name="request-tutor-form" method="post" action="{{ url('update-tutor') }}">
                <div class="modal-body">

                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12 order-md-2">

                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="district">Select District: </label>
                                    <div>
                                        <select name="district" id="district" class="form-control">
                                            <option selected disabled value="">Select District</option>
                                            @if($tutor->district != '')
                                            <option selected value="{{ $tutor->district }}">{{ $tutor->district }} - Selected</option>
                                            @endif
                                            <option value="dhaka">Dhaka</option>
                                            <option value="manikganj">Manikganj</option>
                                            <option value="tangail">Tangail</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="area">Select Area: </label>
                                    <div>
                                        <select name="area" id="area" class="form-control">
                                            <option selected disabled value="">Select Area</option>
                                            @if($tutor->area != '')
                                            <option selected value="{{ $tutor->area }}">{{ $tutor->area }} - Selected</option>
                                            @endif
                                            <option value="gulshan">Gulshan</option>
                                            <option value="banani">Banani</option>
                                            <option value="badda">Badda</option>
                                            <option value="mirpur">Mirpur</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="medium">Select Medium: </label>
                                    <div>
                                        <select name="medium" id="medium" class="form-control">
                                            <option selected disabled value="">Select Medium</option>
                                            @if($tutor->medium != '')
                                            <option selected value="{{ $tutor->medium }}">{{ $tutor->medium }} - Selected</option>
                                            @endif
                                            <option value="English">English</option>
                                            <option value="Bangla">Bangla</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="class">Select Class: </label>
                                    <div>
                                        <select name="class" id="class" class="form-control">
                                            <option selected disabled value="">Select Class</option>
                                            @if($tutor->class != '')
                                            <option selected value="{{ $tutor->class }}">{{ $tutor->class }} - Selected</option>
                                            @endif
                                            <option value="one">One</option>
                                            <option value="two">Two</option>
                                            <option value="three">Three</option>
                                            <option value="four">Four</option>
                                            <option value="five">Five</option>
                                            <option value="six">Six</option>
                                            <option value="seven">Seven</option>
                                            <option value="eight">Eight</option>
                                            <option value="nine">Nine</option>
                                            <option value="ten">Ten</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="subject">Select Subject: </label>
                                    <div>
                                        <select name="subject" id="subject" class="form-control">
                                            <option selected disabled value="">Select Subject</option>
                                            @if($tutor->subject != '')
                                            <option selected value="{{ $tutor->subject }}">{{ $tutor->subject }} - Selected</option>
                                            @endif
                                            <option value="bangla">Bangla</option>
                                            <option value="english">English</option>
                                            <option value="math">Math</option>
                                            <option value="chamestry">Chamestry</option>
                                            <option value="ICT">ict</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="days_per_week">Days Per Week: </label>
                                    <div>
                                        <select name="days_per_week" id="days_per_week" class="form-control">
                                            <option selected disabled value="">Days Per Week</option>
                                            @if($tutor->days_per_week != '')
                                            <option selected value="{{ $tutor->days_per_week }}">{{ $tutor->days_per_week }} - Selected</option>
                                            @endif
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                            <option value="5">Five</option>
                                            <option value="6">Six</option>
                                            <option value="7">Seven</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label" for="text-input">Monthly Salary</label>
                                <div class="col-9">
                                    <input name="salary" class="form-control" type="number" id="text-input" value="{{ $tutor->salary }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-3 col-form-label" for="textarea-input">Details Address</label>
                                <div class="col-9">
                                    <textarea name="address" class="form-control" id="textarea-input" rows="3">{{ $tutor->address }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-3 col-form-label" for="textarea-input">Additional
                                    Information</label>
                                <div class="col-9">
                                    <textarea name="information" class="form-control" id="textarea-input" rows="3">{{ $tutor->information }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-secondary btn-sm" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif


<div class="modal fade show" id="modalSettings" tabindex="-1" role="dialog" style="display: none; padding-right: 17px;" aria-modal="true">

    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Settings</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form method="post" action="{{ url('update-user') }}" enctype="multipart/form-data">
                <div class="modal-body">

                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12 order-md-2">
                            <div class="form-group row">
                                <label class="col-3 col-form-label" for="text-input">Full Name</label>
                                <div class="col-9">
                                    <input name="name" id="name" class="form-control" type="text" value="{{ $user['name']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label" for="text-input">Phone No</label>
                                <div class="col-9">
                                    <input name="phone" id="phone" class="form-control" type="text" value="{{ $user['phone']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label" for="text-input">Email</label>
                                <div class="col-9">
                                    <input name="email" class="form-control" type="text" id="text-input" value="{{ $user['email']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label" for="select-input">
                                    Gender:</label>
                                <div class="col-9">
                                    <select name="gender" class="form-control" id="select-input">
                                        @if ($user['gender'] == 'Male')
                                        <option disabled value="">Gender</option>
                                        <option selected value="{{ $user['gender']}}">{{ $user['gender']}}</option>
                                        <option value="Female">Female</option>
                                        @elseif ($user['gender'] == 'Female')
                                        <option disabled value="">Gender</option>
                                        <option value="Male">Male</option>
                                        <option selected value="{{ $user['gender']}}">{{ $user['gender']}}</option>
                                        @else
                                        <option selected disabled value="">Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-3 col-form-label" for="select-input">
                                    Visibility:</label>
                                <div class="col-9">
                                    <select name="status" class="form-control" id="select-input">
                                        @if ($user['status'] == 'Available')
                                        <option disabled value="">Select one</option>
                                        <option selected value="{{ $user['status']}}">{{ $user['status']}}</option>
                                        <option value="Unavaliable">Unavaliable</option>
                                        @elseif ($user['status'] == 'Unavaliable')
                                        <option disabled value="">Select one</option>
                                        <option value="Available">Available</option>
                                        <option selected value="{{ $user['status']}}">{{ $user['status']}}</option>
                                        @else
                                        <option selected disabled value="">Select one</option>
                                        <option value="Available">Available</option>
                                        <option value="Unavaliable">Unavaliable</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label" for="image">Image</label>
                                <div class="col-9">
                                    <div class="custom-file">
                                        <input class="custom-file-input" type="file" id="file-input" name="image">
                                        <label class="custom-file-label" for="file-input">Choose file...</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label" for="password">Password</label>
                                <div class="col-9">
                                    <input name="password" class="form-control" type="password" id="password">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-secondary btn-sm" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop