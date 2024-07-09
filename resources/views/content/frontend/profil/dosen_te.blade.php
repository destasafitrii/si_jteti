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
    <title>Prodi Teknologi Listrik</title>
</head>
<div class="page__banner" data-background="frontend/assets/img/banner/back.beranda.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <span>dosen</span>
                    <ul>
                        <li><a href="index.html">Profil</a><span>|</span></li>
                        <li>Dosen</li>
                    </ul>
                    <h1>Prodi Teknologi Listrik</h1>
                </div>
            </div>
        </div>
    </div>
</div>    
<!-- Page Banner Area End -->
<!-- Team Page Area Start -->
<div class="team__two section-padding">
    <div class="container">
        <div class="row">
            @foreach($dosentls as $dosentl)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="team__two-item">
                    <div class="team__two-item-image">
                        @if($dosentl->foto)
                            <img src="{{ Storage::url('fotos/' . $dosentl->foto) }}" alt="{{ $dosentl->nama }}" style="width: 300px; height: 301px; object-fit: cover;">
                        @else
                            <img src="frontend/assets/img/team/default.jpg" alt="Default Foto" style="width: 300px; height: 301px; object-fit: cover;">
                        @endif
                    </div>
                    <div class="team__two-item-content">
                        <h4>{{ $dosentl->nama }}</h4>
                        <span class="text-two">{{ $dosentl->jabatan }}</span><br>
                        <span class="text-eight">NIDN/NIP: {{ $dosentl->nip }}</span><br>
                        <span class="text-eight">Keahlian: {{ $dosentl->keahlian }}</span><br>
                        <a href="mailto:{{ $dosentl->email }}" class="text-eight">{{ $dosentl->email }}</a><br>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
<!-- Team Page Area End -->
@endsection