@extends('layouts.master')

@section('content')
<div class="app-main__inner">

    <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-stopwatch icon-gradient bg-amy-crisp"></i>
                        </div>
                        <div>Daftar Pertanyaan
                            <div class="page-title-subheading">Share what you want to discuss with others!</div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                        <div class="d-inline-block dropdown">
                            <a href="{{ route('questioncreate') }}"><button type="button"  class="btn-shadow  btn btn-info">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-business-time fa-w-20"></i>
                                </span>
                                Buat pertanyaan
                            </button>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade active show" id="tab-content-1" role="tabpanel">
            <div class="row">
            @foreach($questions as $key => $question)
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">
                            <i class="header-icon lnr-graduation-hat icon-gradient bg-happy-itmeo"> </i>{{ $question->title }}<div class="btn-actions-pane-right actions-icon-btn">{{ $question->name }} | {{ $question->created_at }}</div>
                        </div>
                        <div class="card-body">
                            <p>{{ $question->content }} </p>
                        </div>
                        <div class=" card-footer">
                            <a href="#" class="stretched-link">{{ $question->tag }}</a>
                            <!-- <button class="mr-2 btn btn-link btn-sm">Cancel</button>
                            <button class="btn-wide btn-shadow btn btn-primary">Submit</button> -->
                            <div class="btn-actions-pane-right actions-icon-btn"><a href="{{ route('questionDetail', [$question->id]) }}" class="btn btn-primary ">See Discussion</a></div>
                            <div class="actions-icon-btn"><a href="{{ route('questionDelete', [$question->id]) }}" class="btn btn-danger ">Delete</a></div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>

</div>
@endsection