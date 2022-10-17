@extends('layouts.default')

@section('content')

<div class="container padding-bottom-3x mb-2">
    <div class="row">
        <div class="col-lg-4">
            <aside class="user-info-wrapper">
                <div class="user-cover" style="background-image: url('assets/img/account/user-cover-img.jpg');">
                    <div class="info-label" data-toggle="tooltip" title="" data-original-title="User is {{Auth::user()->status}}"><i class="icon-medal"></i>{{Auth::user()->status}}</div>
                </div>
                <div class="user-info">
                    <div class="user-avatar"><a class="edit-avatar" href="#"></a><img src="{{ url('images/'.Auth::user()->image) }}" alt="User"></div>
                    <div class="user-data">
                        <h4>{{ Auth::user()->name }}</h4><span>Joined {{ date('d-m-Y', strtotime(Auth::user()->created_at)) }}</span>
                    </div>
                </div>
            </aside>
            <nav class="list-group">
                <a class="list-group-item with-badge active" href="/message"><i class="icon-bag">
                    </i>Message<span class="badge badge-primary badge-pill">{{ count($messages) }}</span></a>
                <a class="list-group-item " href="/my-profile"><i class="icon-head"></i>Profile</a>
            </nav>
        </div>
        <div class="col-lg-8">
            <div class="table-responsive">
                <table class="table table-hover margin-bottom-none">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>DateTime</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($messages as $message)
                        <tr>
                            <td class="product-title"><a style="text-decoration: none;" href="user/{{ $message->from_id }}">{{ $message->fullname }}</a>
                            </td>
                            <td>{{ $message->email }}</td>
                            <td><span class="text-danger">{{ $message->created_at }}</span></td>
                            <td><button class="btn btn-link-info" type="button">View</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop