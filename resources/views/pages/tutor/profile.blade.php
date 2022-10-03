@extends('layouts.default')

@section('content')

    <div class="container padding-bottom-3x mb-2">
        <div class="row">
            <div class="col-lg-4">
                <aside class="user-info-wrapper">
                    <div class="user-cover" style="background-image: url('assets/img/account/user-cover-img.jpg');">
                        <div class="info-label" data-toggle="tooltip" title=""
                            data-original-title="You currently have 290 Reward Points to spend"><i class="icon-medal"></i>290
                            points</div>
                    </div>
                    <div class="user-info">
                        <div class="user-avatar"><a class="edit-avatar" href="#"></a><img
                                src="assets/img/account/user-ava.jpg" alt="User"></div>
                        <div class="user-data">
                            <h4>Abdullah Al Noman</h4><span>Joined February 06, 2017</span>
                        </div>
                    </div>
                </aside>
                <nav class="list-group"><a class="list-group-item with-badge" href="/message"><i
                            class="icon-bag"></i>Message<span class="badge badge-primary badge-pill">6</span></a><a
                        class="list-group-item active" href="/my-profile"><i class="icon-head"></i>Profile</a><a
                        class="list-group-item" href="account-address.html"><i class="icon-map"></i>Addresses</a></nav>
            </div>
            <div class="col-lg-8">
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
        </div>
    </div>

@stop
