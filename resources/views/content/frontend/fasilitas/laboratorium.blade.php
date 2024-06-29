@extends('template.frontend')
@section('content')
<!-- Page Banner Area Start -->
<div class="page__banner" data-background="frontend/assets/img/banner/back.beranda.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <span>Laboratorium</span>
                    <ul>
                        <li><a href="index.html">Fasilitas</a><span>|</span></li>
                        <li>Laboratorium</li>
                    </ul>
                    <h1>Laboratorium Jurusan</h1>
                </div>
            </div>
        </div>
    </div>
</div>    
<!-- Page Banner Area End -->
<!-- Project Area Start -->
<div class="project__area section-padding">
    <div class="container">
        <div class="row">
            @foreach ($laboratorium as $laboratorium)
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="project__area-item">
                    <img src="{{ Storage::url('fotos/' . $laboratorium->foto) }}"alt=""  style="width: 450px; height: 410px; object-fit: cover;">
                    <div class="project__area-item-content">
                        <h4><a href="{{ route('frontend.laboratorium.show', $laboratorium->id) }}">{{ $laboratorium->nama }}</a></h4>
                        {{-- <span>Conbix Agency</span> --}}
                    </div>                        
                    <div class="project__area-item-icon">
                        <a href="{{ route('frontend.laboratorium.show', $laboratorium->id) }}"><i class="far fa-arrow-right"></i></a>
                    </div>                                
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Project Area End -->
@endsection