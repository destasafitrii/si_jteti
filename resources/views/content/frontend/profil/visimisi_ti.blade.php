@extends('template.frontend')
@section('content')
<!-- Page Banner Area Start -->
<div class="page__banner" data-background="frontend/assets/img/banner/back.beranda.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <span>VISI & MISI</span>
                    <ul>
                        <li><a href="index.html">Profil</a><span>|</span></li>
                        <li>Visi & Misi</li>
                    </ul>
                    <h1> Teknologi Informasi</h1>
                </div>
            </div>
        </div>
    </div>
</div>    
<!-- Page Banner Area End -->

@foreach ($visitis as $visiti)
<div class="news__details-left-box">
    <div class="news__details-left-box-shape">
        <img src="{{ asset('assets/img/icon/blog.png') }}" alt="">
    </div>
    <h6>Visi</h6>
    <p>{{ $visiti->visi }}</p>                                  
</div>
<div class="news__details-left-box">
    <div class="news__details-left-box-shape">
        <img src="{{ asset('assets/img/icon/blog.png') }}" alt="">
    </div>
    <h6>Misi</h6>
    <p>{{ $visiti->misi }}</p>                                  
</div>
@endforeach


@endsection