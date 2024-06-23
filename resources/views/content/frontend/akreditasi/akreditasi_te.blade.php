@extends('template.frontend')
@section('content')
<!-- Page Banner Area Start -->
<div class="page__banner" data-background="frontend/assets/img/pages/page-banner.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <span>akreditasi</span>
                    <ul>
                        <li><a href="index.html">Akreditasi</a><span>|</span></li>
                        <li>Program Studi</li>
                    </ul>
                    <h1>Teknologi Listrik</h1>
                </div>
            </div>
        </div>
    </div>
</div>    
<!-- Page Banner Area End -->
<div class="company__history section-padding">
    <div class="container">
        <div class="row mb-70">
            <div class="col-xl-12">
                <div class="company__history-title t-center">
                    <span class="subtitle-one">Our History</span>
                    <h2>Our Company History</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="company__history-area dark__image">
                    @foreach ($akreditasitls as $index => $akreditasitl)
                        @if ($index % 2 == 0)
                            <div class="company__history-area-item">
                                <div class="company__history-area-item-left">
                                    <img src="{{ Storage::url('fotos/' . $akreditasitl->foto) }}"
                                        alt="{{ $akreditasitl->judul }}"
                                        style="width: 410px; height: 224px; object-fit: cover;">
                                </div>
                                <div class="company__history-area-item-right">
                                    <div class="company__history-area-item-right-content mb-50 xl-mb-30">
                                        <p>Tanggal Akreditasi:
                                            {{ \Carbon\Carbon::parse($akreditasitl->tanggal_akreditasi)->format('d M Y') }}
                                        </p>
                                        <p>Masa Berlaku:
                                            {{ \Carbon\Carbon::parse($akreditasitl->masa_berlaku)->format('d M Y') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="company__history-area-items"
                                style="
                            padding-left: 99px;
                        ">
                                <div class="company__history-area-items-left order-last order-lg-first">
                                    <div class="company__history-area-items-left-content mb-50 xl-mb-30">
                                        <p>Tanggal Akreditasi:
                                            {{ \Carbon\Carbon::parse($akreditasitl->tanggal_akreditasi)->format('d M Y') }}
                                        </p>
                                        <p>Masa Berlaku:
                                            {{ \Carbon\Carbon::parse($akreditasitl->masa_berlaku)->format('d M Y') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="company__history-area-items-right">
                                    <img src="{{ Storage::url('fotos/' . $akreditasitl->foto) }}"
                                        alt="{{ $akreditasitl->judul }}"
                                        style="width: 410px; height: 224px; object-fit: cover;">
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection