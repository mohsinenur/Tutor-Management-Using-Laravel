@extends('layouts.default')

@section('content')

    <div class="container padding-bottom-3x mb-2">

        <div class="row">
            <div class="col-md-6">
                @if ($message = Session::get('errors'))
                    <div class="alert alert-danger alert-dismissible fade show text-center margin-bottom-1x"><span
                            class="alert-close" data-dismiss="alert"></span><i class="icon-ban"></i>&nbsp;&nbsp;<strong>Error
                            alert:</strong>
                        {{ $message }}</div>
                @endif
                <div class="padding-top-3x hidden-md-up"></div>
                <h3 class="margin-bottom-1x">Have Account? Login</h3>
                <form class="login-box" method="post" action="{{ route('login.post') }}">
                    @csrf
                    <div class="form-group input-group">
                        <input class="form-control" name="email" id="email" type="email" placeholder="Email"
                            required autofocus><span class="input-group-addon"><i class="icon-mail"></i></span>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group input-group">
                        <input class="form-control" name="password" id="password" type="password" placeholder="Password"
                            required=""><span class="input-group-addon"><i class="icon-lock"></i></span>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="remember_me" checked="">
                            <label class="custom-control-label" for="remember_me">Remember me</label>
                        </div><a class="navi-link" href="/forgot-password">Forgot password?</a>
                    </div>
                    <div class="text-center text-sm-right">
                        <button class="btn btn-primary margin-bottom-none" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
