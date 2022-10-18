@extends('layouts.default')

@section('content')

<div class="container padding-bottom-2x mb-2">
    <div class="row">
        <div class="col-lg-8 col-md-8 order-md-1">
            <h6 class="text-muted text-normal text-uppercase">
                USER PROFILE
            </h6>
            <hr class="margin-bottom-1x">
            <div class="product-card product-list"><a class="product-thumb" href="#">
                    <img src="{{ url('images/'.$user->image) }}" alt="User">
                </a>
                <div class="product-info">
                    <h3 style="color: #0da9ef">{{ $user->name }}
                    </h3>
                    <h4 class="product-price">
                        ID # {{ $user->id }}
                    </h4>
                    <p>
                        <strong>Phone:</strong> {{ $user->phone }}
                    </p>
                    <p>
                        <strong>Email:</strong> {{ $user->email }}
                    </p>
                    <p>
                        <strong>Gender:</strong> {{ $user->gender }}
                    </p>
                    <p>
                        <strong>Status:</strong> {{ $user->status }}
                    </p>
                </div>

            </div>
        </div>
        <div class="col-lg-4 col-md-4 order-md-2">
            <h6 class="text-muted text-normal text-uppercase">Message this User</h6>
            <hr class="margin-bottom-1x">
            <form method="POST" action="{{ url('create-message') }}">
                @csrf
                <input type="hidden" name="to_id" value="{{ $user->id }}">
                <div class="form-group">
                    <label for="validationCustom01">Full name</label>
                    <input class="form-control" type="text" required name="fullname">
                </div>
                <div class="form-group">
                    <label for="validationCustom02">Mobile</label>
                    <input class="form-control" type="text" required name="phone">
                </div>
                <div class="form-group">
                    <label for="validationCustom03">Email</label>
                    <input class="form-control" type="text" required name="email">
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
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
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