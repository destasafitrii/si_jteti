@extends('template.frontend')
@section('content')
<!-- Page Banner Area Start -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .page__banner-content h1 {
            font-size: 50px;
            color: white;
        }
    </style>
    <title>Project Base Learning</title>
</head>
<div class="page__banner" data-background="frontend/assets/img/banner/back.beranda.jpg">
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
        <div class="row" >
            @foreach ( $beritapbls as $beritapbl )
            <div class="col-xl-4 col-lg-6 mb-30">
                <div class="blog__two-item page">
                    <div class="blog__two-item-image">
                        <a href="{{ route('berita_pbl.show', $beritapbl->id) }}"><img src="{{ Storage::url('fotos/' . $beritapbl->foto) }}"  style="width: 450px; height: 250px; object-fit: cover; alt=""></a>
                    </div>
                    <div class="blog__two-item-content">
                        <div class="blog__two-item-content-meta">
                        </div>
                        <h4><a href="{{ route('berita_pbl.show', $beritapbl->id) }}">{{ $beritapbl->judul }}</a></h4>
                        <a class="btn-six" href="{{ route('berita_pbl.show', $beritapbl->id) }}">Selengkapnya<i class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-80 t-center">
            <div class="col-xl-12">
                <div class="theme__pagination">
                    <ul>
                        {{-- Previous Page Link --}}
                        @if ($beritapbls->onFirstPage())
                            <li class="disabled"><span><i class="fas fa-chevron-double-left"></i></span></li>
                        @else
                            <li><a href="{{ $beritapbls->previousPageUrl() }}"><i class="fas fa-chevron-double-left"></i></a></li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($beritapbls->getUrlRange(1, $beritapbls->lastPage()) as $page => $url)
                            @if ($page == $beritapbls->currentPage())
                                <li class="active"><span>{{ $page }}</span></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($beritapbls->hasMorePages())
                            <li><a href="{{ $beritapbls->nextPageUrl() }}"><i class="fas fa-chevron-double-right"></i></a></li>
                        @else
                            <li class="disabled"><span><i class="fas fa-chevron-double-right"></i></span></li>
                        @endif
                    </ul>
                </div>
            </div>                
        </div>
    </div>
</div>
<!-- Blog Area End -->
@endsection