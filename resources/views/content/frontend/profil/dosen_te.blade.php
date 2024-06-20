@extends('template.frontend')
@section('content')
<!-- Page Banner Area Start -->
<div class="page__banner" data-background="frontend/assets/img/pages/page-banner.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <span>dosen</span>
                    <ul>
                        <li><a href="index.html">Profil</a><span>|</span></li>
                        <li>Dosen</li>
                    </ul>
                    <h1>Teknologi Listrik</h1>
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
                            <img src="{{ Storage::url('fotos/' . $dosentl->foto) }}" alt="{{ $dosentl->nama }}" style="width: 450px; height: 451px; object-fit: cover;">
                        @else
                            <img src="frontend/assets/img/team/default.jpg" alt="Default Foto" style="width: 450px; height: 451px; object-fit: cover;">
                        @endif
                    </div>
                    <div class="team__two-item-content">
                        <h4>{{ $dosentl->nama }}</h4>
                        <span class="text-eight">NIP: {{ $dosentl->nip }}</span><br>
                        <span class="text-eight">NIDN: {{ $dosentl->nidn }}</span><br>
                        <span class="text-two">{{ $dosentl->jabatan }}</span>
                        <div class="team__two-item-content-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
<!-- Team Page Area End -->
@endsection