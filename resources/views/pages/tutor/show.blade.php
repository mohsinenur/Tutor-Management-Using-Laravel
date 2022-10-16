@extends('layouts.default')

@section('content')

<div class="container padding-bottom-2x mb-2">
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
                        <strong>Experience:</strong> (need to configure).
                    </p>
                    <p>
                        <strong>Qualification:</strong> B.Sc. in EEE (need to configure)
                    </p>
                    <p>
                        <strong>Area Covered: {{ $user->area }}</strong> ( BADDA , CHAKBAZAR , DHANMONDI ) (need to configure)
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
                        <td>Available (need to configure)</td>
                    </tr>
                    <tr>
                        <td>Days per week:</td>
                        <td>{{ $user->days_per_week }} days/week </td>
                    </tr>
                    <tr>
                        <td>Preffered Tutoring Style:</td>
                        <td>Group Tuition, Private Tuition (need to configure)</td>
                    </tr>
                    <tr>
                        <td>Salary Range:</td>
                        <td>5500-6500 tk/month (need to configure)</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4 col-md-4 order-md-2">
            <h6 class="text-muted text-normal text-uppercase">Message this Tutor</h6>
            <hr class="margin-bottom-1x">
            <form class="needs-validation" novalidate="">
                <div class="form-group">
                    <label for="validationCustom01">Full name</label>
                    <input class="form-control" type="text" id="validationCustom01" required="">
                    <div class="valid-feedback">Looks good!</div>
                </div>
                <div class="form-group">
                    <label for="validationCustom02">Mobile</label>
                    <input class="form-control" type="text" id="validationCustom02" required="">
                    <div class="valid-feedback">Looks good!</div>
                </div>
                <div class="form-group">
                    <label for="validationCustom03">Email</label>
                    <input class="form-control" type="text" id="validationCustom03" required="">
                    <div class="valid-feedback">Looks good!</div>
                </div>
                <div class="form-group">
                    <label for="textarea-input">Details</label>
                    <textarea class="form-control" id="textarea-input" rows="2"></textarea>
                    <div class="valid-feedback">Looks good!</div>
                </div>
                <button class="btn btn-primary" type="submit">Send Message</button>
            </form>
        </div>
    </div>
</div>

@stop