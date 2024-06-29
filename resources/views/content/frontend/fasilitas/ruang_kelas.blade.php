@extends('template.frontend')
@section('content')
<!-- Page Banner Area Start -->
<div class="page__banner" data-background="frontend/assets/img/banner/back.beranda.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <span>ruang kelas</span>
                    <ul>
                        <li><a href="index.html">Fasilitas</a><span>|</span></li>
                        <li>Ruang Kelas</li>
                    </ul>
                    <h1>Ruang Kelas</h1>
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
            @foreach ($ruangkelas as $ruangkelas)
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="project__area-item">
                    <img src="{{ Storage::url('fotos/' . $ruangkelas->foto) }}"alt=""  style="width: 450px; height: 410px; object-fit: cover;">
                    <div class="project__area-item-content">
                        <h4><a href="{{ route('frontend.ruang_kelas.show', $ruangkelas->id) }}">{{ $ruangkelas->nama }}</a></h4>
                        {{-- <span>Conbix Agency</span> --}}
                    </div>                        
                    <div class="project__area-item-icon">
                        <a href="{{ route('frontend.ruang_kelas.show', $ruangkelas->id) }}"><i class="far fa-arrow-right"></i></a>
                    </div>                                
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Project Area End -->
@endsection