@extends('layouts.master')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display1 icon-gradient bg-premium-dark"></i>
                </div>
                <div>Pertanyaan
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
                            <h5 class="card-title">Form Pertanyaan</h5>
                            <form class="" action="{{ route('questionStore') }}" method="POST">
                                @csrf
                                <div class="position-relative form-group">
                                    <label>Judul Pertanyaan</label>
                                    <input name="title" id="title" placeholder="Masukkan judul pertanyaan..." class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label>Isi Pertanyaan</label>
                                    <textarea name="content" id="content" class="form-control" placeholder="Masukkan isi jawaban..."></textarea>
                                </div>
                                <div class="position-relative form-group">
                                    <label >Tag</label>
                                    <input name="tag" id="tag" placeholder="Masukkan tag..." class="form-control">
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