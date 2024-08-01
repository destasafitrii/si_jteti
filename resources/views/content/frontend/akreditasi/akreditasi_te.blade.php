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
                    <span>akreditasi</span>
                    <ul>
                        <li><a href="index.html">Akreditasi</a><span>|</span></li>
                        <li>Program Studi</li>
                    </ul>
                    <h1>Prodi Teknologi Listrik</h1>
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
                    <span class="subtitle-one">Akreditasi</span>
                    <h2>Prodi Teknologi Listrik</h2>
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