@extends('template.frontend')
@section('content')
<!-- Page Banner Area Start -->
<div class="page__banner" data-background="frontend/assets/img/pages/page-banner.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <span>berita</span>
                    <ul>
                        <li><a href="index.html">berita</a><span>|</span></li>
                        <li>jurusan</li>
                    </ul>
                    <h1>Project Base Learning</h1>
                </div>
            </div>
        </div>
    </div>
</div>    
<!-- Page Banner Area End -->
<!-- Blog Area Start -->
<div class="blog__two section-padding">
    <div class="container">
        <div class="row">
            @foreach ( $beritapbls as $beritapbl )
            <div class="col-xl-4 col-lg-6 mb-30">
                <div class="blog__two-item page">
                    <div class="blog__two-item-image">
                        <a href="detail_berita"><img src="{{ Storage::url('fotos/' . $beritapbl->foto) }}"  style="width: 450px; height: 250px; object-fit: cover; alt=""></a>
                    </div>
                    <div class="blog__two-item-content">
                        <div class="blog__two-item-content-meta">
                        </div>
                        <h4><a href="detail_berita">{{ $beritapbl->judul }}</a></h4>
                        <a class="btn-six" href="detail_berita">Read More<i class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-80 t-center">
            <div class="col-xl-12">
                <div class="theme__pagination">
                    <ul>
                        <li><a class="active" href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#"><i class="far fa-ellipsis-h"></i></a></li>
                        <li><a href="#">05</a></li>
                        <li><a href="#"><i class="fas fa-chevron-double-right"></i></a></li>
                    </ul>
                </div>
            </div>                
        </div>
    </div>
</div>
<!-- Blog Area End -->
@endsection