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
    <title>Ruangan Manajemen</title>
</head>

<div class="page__banner" data-background="frontend/assets/img/banner/back.beranda.jpg" style="padding-bottom: 144px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <span>ruangan</span>
                    <ul>
                        <li><a href="index.html">Fasilitas</a><span>|</span></li>
                        <li>Ruang Manajemen</li>
                    </ul>
                    <h1>Ruangan Manajemen</h1>
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
            @foreach ($ruangmanajemens as $ruangmanajemen)
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="project__area-item">
                    <img src="{{ Storage::url('fotos/' . $ruangmanajemen->foto) }}"alt=""  style="width: 350px; height: 310px; object-fit: cover;">
                    <div class="project__area-item-content">
                        <h4><a href="{{ route('frontend.ruang_manajemen.show', $ruangmanajemen->id) }}">{{ $ruangmanajemen->nama }}</a></h4>
                        {{-- <span>Conbix Agency</span> --}}
                    </div>                        
                    <div class="project__area-item-icon">
                        <a href="{{ route('frontend.ruang_manajemen.show', $ruangmanajemen->id) }}"><i class="far fa-arrow-right"></i></a>
                    </div>                                
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Project Area End -->
@endsection