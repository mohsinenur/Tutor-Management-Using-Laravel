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