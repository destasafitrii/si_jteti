@extends('template.frontend')
@section('content')
<!-- Page Banner Area Start -->
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
<div class="team__two section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="team__two-item">
                    <div class="team__two-item-image">
                        <img src="frontend/assets/img/team/team-9.jpg" alt="">
                    </div>
                    <div class="team__two-item-content">
                        <h4><a href="team-single.html">Desta Safitri</a></h4>
                        <span class="text-eight">kepala jurusan</span>
                        <div class="team__two-item-content-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Page Area End -->
@endsection