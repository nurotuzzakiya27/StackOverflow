@extends('layouts.master')

@section('content')
<div class="app-main__inner">      

    <div class="col-md-12" style="padding-top: 2px">

    <div class="card-shadow-primary profile-responsive card-border mb-1 card">
        <div class="dropdown-menu-header">
            <div class="dropdown-menu-header-inner bg-info">
                <div class="menu-header-content btn-pane-right">
                    
                    <div><h5 class="menu-header-title">Entity Relationship Diagram (Kelompok 52)</h5></div>
                    
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane active show" id="tab-example-161">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="widget-content" style="text-align: center">
                            <img src="{{ asset('/architectui-html-pro/assets/images/erd.jpg') }}" style="max-width: 80%; ">
                        </div>
                    </li>
                    <li class="p-0 list-group-item">
                        <div class="grid-menu grid-menu-2col">
                            <div class="no-gutters row">
                                <div class="col-sm-6">
                                    <a href="feed" class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-license btn-icon-wrapper btn-icon-lg mb-3"> </i>View Questions</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="/question/create" class="btn-icon-vertical btn-square btn-transition btn btn-outline-link"><i class="lnr-music-note btn-icon-wrapper btn-icon-lg mb-3"> </i>Create Question</a>
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