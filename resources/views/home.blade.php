@extends('layouts.master')

@section('content')
<div class="app-main__inner">      

    <div class="col-md-12" style="padding-top: 20px">

    <div class="card-shadow-primary profile-responsive card-border mb-3 card">
        <div class="dropdown-menu-header">
            <div class="dropdown-menu-header-inner bg-info">
                <div class="menu-header-image opacity-2" style="background-image: url('../assets/images/dropdown-header/abstract1.jpg')"></div>
                <div class="menu-header-content btn-pane-right">
                    <div class="avatar-icon-wrapper mb-3 avatar-icon-xl">
                        <div class="avatar-icon "><img src="{{ asset('/architectui-html-pro/assets/images/avatars/14.jpg') }}" alt="Avatar 5"></div>
                    </div>
                    <div><h5 class="menu-header-title">Welcome, {{ Auth::user()->name }}</h5></div>
                    <div class="menu-header-btn-pane">
                        <div>
                            <div role="group" class="btn-group text-center">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane active show" id="tab-example-161">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="widget-content">
                            @foreach($value as $key => $val)
                            <div class="text-center"><button class="mb-2 mr-2 btn btn-warning">Total Reputasi<span class="badge badge-pill badge-light">{{$val['reputasi']}}</span></button>
                                <h5><span class="pr-2"><b class="text-danger">{{$val['upvote']}}</b> upvote,</span><span><b class="text-success">{{$val['downvote']}}</b> downvote,</span></span><span><b class="text-primary">  {{$val['favorite']}}</b> favourites</span></h5></div>
                            @endforeach
                        </div>
                    </li>
                    <li class="p-0 list-group-item">
                        <div class="grid-menu grid-menu-2col">
                            <div class="no-gutters row">
                                <div class="col-sm-6">
                                    <a href="feed" class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-book btn-icon-wrapper btn-icon-lg mb-3"> </i>View Questions</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="/question/create" class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-pencil btn-icon-wrapper btn-icon-lg mb-3"> </i>Create Question</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="tab-example-162">
                <div class="p-3"><p class="mb-0">With supporting text below as a natural lead-in to additional content.</p></div>
            </div>
        </div>
    </div>
</div>
@endsection