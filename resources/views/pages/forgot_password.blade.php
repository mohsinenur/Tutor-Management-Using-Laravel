@extends('layouts.default')

@section('content')

    <div class="container padding-bottom-3x mb-2">
        @if ($message = Session::get('errors'))
            <div class="alert alert-danger alert-dismissible fade show text-center margin-bottom-1x"><span class="alert-close"
                    data-dismiss="alert"></span><i class="icon-ban"></i>&nbsp;&nbsp;<strong>Error alert:</strong>
                {{ $message }}</div>
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <h2>Forgot your password?</h2>
                <p>Change your password in three easy steps. This helps to keep your new password secure.</p>
                <ol class="list-unstyled">
                    <li><span class="text-primary text-medium">1. </span>Fill in your email address below.</li>
                    <li><span class="text-primary text-medium">2. </span>We'll email you a temporary code.</li>
                    <li><span class="text-primary text-medium">3. </span>Use the code to change your password on our secure
                        website.</li>
                </ol>
                <form class="card mt-4" method="post" action="{{ route('postForgotPassword') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email-for-pass">Enter your email address</label>
                            <input class="form-control" name="email" type="email" id="email-for-pass"
                                required=""><small class="form-text text-muted">Type in the email address you used when
                                you registered with
                                Futor Finder. Then we'll email a code to this address.</small>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Get OTP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
