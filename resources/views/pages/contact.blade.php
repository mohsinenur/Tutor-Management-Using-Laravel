@extends('layouts.default')

@section('content')

    <div class="container padding-bottom-2x mb-2">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show text-center margin-bottom-1x"><span
                    class="alert-close" data-dismiss="alert"></span><i class="icon-help"></i>&nbsp;&nbsp;<strong>Success
                    alert:</strong> {{ $message }}</div>
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
        <div class="col-md-7 order-md-2">
            <h6 class="text-muted text-normal text-uppercase">Contact Admin</h6>
            <hr class="margin-bottom-1x">
            <form method="POST" action="{{ url('admin-message') }}">
                @csrf
                <div class="form-group">
                    <label for="validationCustom01">Full name</label>
                    <input class="form-control" type="text" id="validationCustom01" required="" name="fullname">
                </div>
                <div class="form-group">
                    <label for="validationCustom02">Mobile</label>
                    <input class="form-control" type="number" id="validationCustom02" required="" name="phone">
                </div>
                <div class="form-group">
                    <label for="validationCustom03">Email</label>
                    <input class="form-control" type="email" id="validationCustom03" required="" name="email">
                </div>
                <div class="form-group">
                    <label for="textarea-input">Details</label>
                    <textarea class="form-control" id="textarea-input" name="message" rows="2"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Send Message</button>
            </form>
        </div>

    </div>

@stop
