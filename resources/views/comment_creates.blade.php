@extends('layouts.master')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display1 icon-gradient bg-premium-dark"></i>
                </div>
                <div>Komentar
                    <!-- <div class="page-title-subheading">Isi Pertanyaan</div> -->
                </div>
            </div>
            
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Form Comment</h5>
                            <form class="" action="/comment/save/{{$id}}/{{$answer_id}}" method="POST">
                                @csrf
                                
                                <div class="position-relative form-group">
                                    <label>Isi Comment</label>
                                    <textarea name="content" id="content" class="form-control" placeholder="Masukkan isi komentar..."></textarea>
                                </div>
                                
                                <button type="submit" class="mt-1 btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
</div>

@endsection