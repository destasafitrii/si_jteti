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
        <title>Pimpinan Jurusan</title>
    </head>
    <div class="page__banner" data-background="frontend/assets/img/banner/back.beranda.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <span>Pimpinan</span>
                        <ul>
                            <li><a href="index.html">Profil</a><span>|</span></li>
                            <li>Pimpinan</li>
                        </ul>
                        <h1>Pimpinan Jurusan</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Area End -->

    <!-- Team Page Area Start -->
<div class="team__two section-padding" style="padding: 60px 0px;">
    <div class="container">         
        <div class="row" style="justify-content: center;">
            @foreach($pimpinans as $pimpinan)
                <div class="col-xl-4 col-lg-4 col-md-6 d-flex align-items-center justify-content-center">
                    <div class="team__two-item" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; height: 100%;">
                        <div class="team__two-item-image" style="display: flex; justify-content: center; width: 100%; margin-bottom: 10px;">
                            @if($pimpinan->foto)
                                <img src="{{ Storage::url('fotos/' . $pimpinan->foto) }}" alt="{{ $pimpinan->nama }}" style="width: 300px; height: 301px; object-fit: cover;">
                            @else
                                <img src="frontend/assets/img/team/default.jpg" alt="Default Foto" style="width: 300px; height: 301px; object-fit: cover;">
                            @endif
                        </div>
                        <div class="team__two-item-content" style="text-align: center;">
                            <h5 style="font-size:18px">{{ $pimpinan->nama }}</h5>
                            <span class="text-eight">NIP: {{ $pimpinan->nip }}</span><br>
                            <span class="text-eight">NIK: {{ $pimpinan->nik }}</span><br>
                            <span class="text-two">{{ $pimpinan->jabatan }}</span>
                            {{-- <div class="team__two-item-content-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


    <!-- Team Page Area End -->
@endsection
