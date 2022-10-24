@extends('layouts.default')

@section('content')

    <div class="container padding-bottom-3x mb-2">
        <div class="row">

            <div class="col-md-6">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show text-center margin-bottom-1x">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show text-center margin-bottom-1x">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="padding-top-3x hidden-md-up"></div>
                <h3 class="margin-bottom-1x">No Account? Register</h3>
                <p>Registration takes less than a minute but gives you full control over your orders.</p>
                <form class="row" method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input class="form-control" type="text" id="name" name="name" required>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">E-mail Address</label>
                            <input class="form-control" type="email" id="email" name="email" required>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" id="password" name="password" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="validationCustom03">Type</label>
                        <select name="user_type" id="user_type" class="form-control" id="validationCustom03" required>
                            <option selected disabled value="">Choose type...</option>
                            <option value="tutor">Tutor</option>
                            <option value="student">Student</option>
                            <option value="parent">Parent</option>
                        </select>
                    </div>
                    <div class="col-12 text-center text-sm-right">
                        <button class="btn btn-primary margin-bottom-none" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
