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
                    </i>Message<span class="badge badge-primary badge-pill">{{ $unread_count }}</span></a>
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
                            <td><button class="btn btn-link-info" type="button" data-toggle="modal" data-target="#modalmessage{{ $message->id }}">View</button>
                                <form action="{{ url('message', [$message->id]) }}" method="post">
                                    @csrf
                                    <div class="modal fade show" id="modalmessage{{ $message->id }}" tabindex="-1" role="dialog" style="padding-right: 17px; display: none;" aria-modal="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">{{ $message->fullname }}</h4>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>{{ $message->message }}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-outline-secondary btn-sm" type="button" data-dismiss="modal">Close</button>
                                                    <a href="user/{{ $message->from_id }}" class="btn btn-primary btn-sm" type="submit">Reply</a>
                                                    @if($message->status == 'unread')
                                                    <button class="btn btn-primary btn-sm" type="submit">Mark as read</button>
                                                    @endif
                                                    <a href="{{ url('delete-message', [$message->id]) }}" class="btn btn-danger btn-sm" type="submit">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop