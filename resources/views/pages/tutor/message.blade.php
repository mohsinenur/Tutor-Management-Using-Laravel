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
                <nav class="list-group">
                    <a class="list-group-item with-badge active" href="/message"><i class="icon-bag active"></i>Message</a>
                    <a class="list-group-item" href="/my-profile"><i class="icon-head"></i>Profile</a>
                    <a class="list-group-item" href="account-address.html"><i class="icon-map"></i>Addresses</a>
                </nav>
            </div>
            <div class="col-lg-8">
                <div class="table-responsive">
                    <table class="table table-hover margin-bottom-none">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Khan <p>016775456</p>
                                </td>
                                <td>khan@gmail.com</td>
                                <td><span class="text-danger">09-06-2022</span></td>
                                <td><button class="btn btn-link-info" type="button">View</button></td>
                            </tr>
                            <tr>
                                <td>Selim <p>016775456</p>
                                </td>
                                <td>selim@gmail.com</td>
                                <td><span class="text-danger">09-06-2022</span></td>
                                <td><button class="btn btn-link-info" type="button">View</button></td>
                            </tr>
                            <tr>
                                <td>Arif <p>016775456</p>
                                </td>
                                <td>arif@gmail.com</td>
                                <td><span class="text-danger">09-06-2022</span></td>
                                <td><button class="btn btn-link-info" type="button">View</button></td>
                            </tr>
                            <tr>
                                <td>Nayeem <p>016775456</p>
                                </td>
                                <td>nayeem@gmail.com</td>
                                <td><span class="text-danger">09-06-2022</span></td>
                                <td><button class="btn btn-link-info" type="button">View</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop
