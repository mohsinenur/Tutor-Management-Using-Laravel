@extends('layouts.default')

@section('content')

    <div class="container padding-bottom-2x mb-2">
        <div class="row">
            <div class="col-lg-8 col-md-8 order-md-1">
                <h6 class="text-muted text-normal text-uppercase">
                    TUTOR PROFILE
                </h6>
                <hr class="margin-bottom-1x">
                <div class="product-card product-list"><a class="product-thumb" href="shop-single.html">
                        <img src="{{ asset('assets/img/team/03.jpg') }}" alt="Product">
                    </a>
                    <div class="product-info">
                        <h3 style="color: #0da9ef">Abdullah Al Noman
                        </h3>
                        <h4 class="product-price">
                            ID # 122040079
                        </h4>
                        <p>
                            <strong>Experience:</strong> Interested in learning myself and teaching others.
                        </p>
                        <p>
                            <strong>Qualification:</strong> B.Sc. in EEE
                        </p>
                        <p>
                            <strong>Area Covered: CHITTAGONG</strong> ( BADDA , CHAKBAZAR , DHANMONDI , GULSHAN ,
                            KALLYANPUR, KHILGAON , LALBAGH , MOTIJHEEL , PALTAN , RAMPURA , SHAHBAG , TEJGAON )
                        </p>
                        <p>
                            <strong>Teaching:</strong> General Math, ICT, Math, Higher Math, Physics
                        </p>
                        <p>
                            <strong>Phone:</strong> CHITTAGONG
                        </p>
                        <p>
                            <strong>Email:</strong> noman064@gmail.com
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
                            <td>6000 tk/month</td>
                        </tr>
                        <tr>
                            <td>Current Status for Tuition:</td>
                            <td>Available</td>
                        </tr>
                        <tr>
                            <td>Days per week:</td>
                            <td>4 days/week </td>
                        </tr>
                        <tr>
                            <td>Preffered Tutoring Style:</td>
                            <td>Group Tuition, Private Tuition </td>
                        </tr>
                        <tr>
                            <td>Salary Range:</td>
                            <td>5500-6500 tk/month</td>
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
