@extends('layouts.master')

@section('content')
<div class="app-main__inner">      

    <div class="tab-content">
        <div class="main-card mb-3 card">
            <div class="card-header"><i class="header-icon lnr-graduation-hat icon-gradient bg-happy-itmeo"></i>{{ $questions->title }} <button type="button" class="btn btn-outline-warning" style="margin-left: 20px">{{ $questions->tag }}</button><div class="btn-actions-pane-right actions-icon-btn">{{ $questions->created_at }}</div></div>
            <div class="card-body row">
                <div class="widget-content-left">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left mr-2">
                            <div class="widget-heading">
                                <a href="/question/upvote/{{$questions->id }}/">
                                    <button type="button"class="border-0 btn-transition btn btn-outline-success" data-original-title="upvote">
                                        <i class="{{$questions->btn_upvote }}" style="{{$questions->btn_upvote_color }}"></i>
                                    </button>
                                </a>
                                <!-- <i class="fa fa-chevron-circle-up"></i> -->
                            </div>
                            <div class="widget-subheading" style="padding-left: 15px">{{$questions->sum_votes }}</div>
                            <div class="widget-heading">
                                <a href="/question/downvote/{{$questions->id }}/">
                                    <button type="button"class="border-0 btn-transition btn btn-outline-success" data-original-title="downvote">
                                        <i class="{{$questions->btn_downvote}}" style="{{$questions->btn_downvote_color }}"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget-content-left" style="padding-left: 20px"><p>{{ $questions->content }} </p></div>
                
            </div>
            <div class="card-footer">
                <!-- <a href="#" class="stretched-link">{{ $questions->tag }}</a> -->
                <!-- <button class="mr-2 btn btn-link btn-sm">Cancel</button>
                <button class="btn-wide btn-shadow btn btn-primary">Submit</button> -->
                <!-- <div class="btn-actions-pane-right actions-icon-btn">{{ $questions->created_at }}</div> -->
                    
            </div>
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <!-- <div class="row"> -->
                            <h5 class="card-title">Komentar</h5>
                         <!-- </div> -->
                    </div>
                    <ul class="list-group">
                        @foreach($comments as $key => $comment)
                        <li class="list-group-item"><b>{{$comment->name}}</b> | {{$comment->content}}</li>
                        @endforeach
                    </ul>
                    <div class="d-block text-right card-footer">
                        <a href="/comment/create/{{$questions->id }}">
                            <button class="btn btn-primary">Tambah Komentar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
                            
    </div>
    <div class="row">
            <div class="col-sm-12 ">
                <div class="card-hover-shadow-2x mb-3 card">
                    <div class="card-header-tab card-header">
                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-database icon-gradient bg-malibu-beach"> </i>Jawaban</div>
                    </div>
                    <div class="scroll-area-lg">
                        <div class="scrollbar-container">
                            <div class="p-3">
                                <ul class="todo-list-wrapper list-group list-group-flush">
                                    @foreach($answers as $key => $answer)
                                    <li class="list-group-item">
                                        <div class="todo-indicator bg-primary"></div>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">{{$answer->name}} </div>
                                                    <div class="widget-subheading"><i>{{$answer->content}}</i></div>
                                                    
                                                </div>

                                                <div class="widget-content-right">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-right mr-2">
                                                            <div class="widget-heading">
                                                                <a href="/answer/upvote/{{$questions->id }}/{{$answer->id}}">
                                                                    <button type="button"class="border-0 btn-transition btn btn-outline-success" data-original-title="upvote">
                                                                        <i class="{{$answer->btn_upvote}}" style="{{$answer->btn_upvote_color}}"></i>
                                                                    </button>
                                                                </a>
                                                                <!-- <i class="fa fa-chevron-circle-up"></i> -->
                                                            </div>
                                                            <div class="widget-subheading" style="padding-left: 15px">{{$answer->sum_votes}}</div>
                                                            <div class="widget-heading">
                                                                <a href="/answer/downvote/{{$questions->id }}/{{$answer->id}}">
                                                                    <button type="button"class="border-0 btn-transition btn btn-outline-success" data-original-title="downvote">
                                                                        <i class="{{$answer->btn_downvote}}" style="{{$answer->btn_downvote_color}}"></i>
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>
                                                <a href="/answer/favorite/{{$questions->id }}/{{$answer->id}}"><button type="button" class="border-0 btn-transition btn btn-outline-warning" data-original-title="Favourites">
                                                        <i class="{{$answer->star}}"></i>
                                                </button></a>
                                                <a href="/answer/delete/{{$questions->id }}/{{$answer->id}}"><button class="border-0 btn-transition btn btn-outline-danger"><i class="fa fa-trash-alt">
                                                    </i>
                                                </button></a>
                                                <a href="/answer/edit/{{$questions->id }}/{{$answer->id}}">
                                                    <button class="border-0 btn-transition btn btn-outline-primary">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-12" >
                                            <div class="main-card card" style="border: 1px">
                                                <div class="card-body">
                                                    <!-- <div class="row"> -->
                                                        <h6 class="card-title">Komentar</h6>
                                                     <!-- </div> -->
                                                </div>
                                                <ul class="list-group">
                                                    @foreach($answer->comments as $key => $comment2)
                                                    <li class="list-group-item"><b>{{$comment2->name}}</b> | {{$comment2->content}}</li>
                                                    @endforeach
                                                </ul>
                                                <div class="d-block text-right card-footer">
                                                    <a href="/comment/create/{{$questions->id }}/{{$answer->id}}">
                                                        <button class="btn btn-outline-primary">Tambah Komentar</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-block text-right card-footer">
                        <a href="/answer/create/{{$questions->id}}" class="btn btn-warning">Tambah Jawaban</a>
                    </div>
                </div>
            </div>
        </div>
                        

        
</div>
@endsection