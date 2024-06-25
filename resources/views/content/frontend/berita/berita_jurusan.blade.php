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
                    <h1>Berita Jurusan</h1>
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
            @foreach ($beritajurusans as $beritajurusan)
            <div class="col-xl-4 col-lg-6 mb-30">
                <div class="blog__two-item page">
                    <div class="blog__two-item-image">
                        <a href="{{ route('berita_jurusan.show', $beritajurusan->id) }}"><img src="{{ Storage::url('fotos/' . $beritajurusan->foto) }}" style="width: 450px; height: 250px; object-fit: cover;" alt=""></a>
                    </div>
                    <div class="blog__two-item-content">
                        <div class="blog__two-item-content-meta">
                        </div>
                        <h4><a href="{{ route('berita_jurusan.show', $beritajurusan->id) }}">{{ $beritajurusan->judul }}</a></h4>
                        <a class="btn-six" href="{{ route('berita_jurusan.show', $beritajurusan->id) }}">Read More<i class="far fa-chevron-double-right"></i></a>
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
                        @if ($beritajurusans->onFirstPage())
                            <li class="disabled"><span><i class="fas fa-chevron-double-left"></i></span></li>
                        @else
                            <li><a href="{{ $beritajurusans->previousPageUrl() }}"><i class="fas fa-chevron-double-left"></i></a></li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($beritajurusans->getUrlRange(1, $beritajurusans->lastPage()) as $page => $url)
                            @if ($page == $beritajurusans->currentPage())
                                <li class="active"><span>{{ $page }}</span></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($beritajurusans->hasMorePages())
                            <li><a href="{{ $beritajurusans->nextPageUrl() }}"><i class="fas fa-chevron-double-right"></i></a></li>
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
