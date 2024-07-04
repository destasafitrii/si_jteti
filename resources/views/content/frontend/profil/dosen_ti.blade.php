@extends('template.frontend')
@section('content')
<!-- Page Banner Area Start -->
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
                    <h1>Teknologi Informasi</h1>
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
            @foreach($dosentis as $dosenti)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="team__two-item">
                    <div class="team__two-item-image">
                        @if($dosenti->foto)
                            <img src="{{ Storage::url('fotos/' . $dosenti->foto) }}" alt="{{ $dosenti->nama }}" style="width: 300px; height: 301px; object-fit: cover;">
                        @else
                            <img src="frontend/assets/img/team/default.jpg" alt="Default Foto" style="width: 300px; height: 301px; object-fit: cover;">
                        @endif
                    </div>
                    <div class="team__two-item-content">
                        <h4>{{ $dosenti->nama }}</h4>
                        <span class="text-eight">NIDN/NIP: {{ $dosenti->nip }}</span><br>
                        <span class="text-eight">Keahlian: {{ $dosenti->keahlian }}</span><br>
                        <a href="mailto:{{ $dosenti->email }}" class="text-eight">{{ $dosenti->email }}</a><br>
                        <span class="text-two">{{ $dosenti->jabatan }}</span><br>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team Page Area End -->
@endsection
