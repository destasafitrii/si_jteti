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
                    <h1>Teknologi Informasi</h1>
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
                    <h2>Prodi Teknologi Informasi</h2>
                </div>
            </div>
        </div>
        <div class="row">
        @foreach ($akreditasitis as $index => $akreditasiti)
            <div class="col-xl-12">
                <div class="company__history-area-item">
                    <div class="company__history-area-item">
                        @if ($index % 2 == 0
                        )
                        <div class="company__history-area-item-left">
                            <img src="{{ Storage::url('fotos/' . $akreditasiti->foto) }}" alt="{{ $akreditasiti->judul }}" style="width: 410px; height: 224px; object-fit: cover;">
                        </div>
                        <div class="company__history-area-item-right">
                            <div class="company__history-area-item-right-content mb-50 xl-mb-30">
                                <div class="company__history-area-item-right-content-date">
                                </div>
                                <p>Tanggal Akreditasi: {{ \Carbon\Carbon::parse($akreditasiti->tanggal_akreditasi)->format('d M Y') }}</p>
                                <p>Masa Berlaku: {{ \Carbon\Carbon::parse($akreditasiti->masa_berlaku)->format('d M Y') }}</p>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="company__history-area-items">
                        <div class="company__history-area-items-left order-last order-lg-first">
                            <div class="company__history-area-items-left-content mb-50 xl-mb-30">
                                <div class="company__history-area-items-left-content-date">
                                </div>
                                <p>Tanggal Akreditasi: {{ \Carbon\Carbon::parse($akreditasiti->tanggal_akreditasi)->format('d M Y') }}</p>
                                <p>Masa Berlaku: {{ \Carbon\Carbon::parse($akreditasiti->masa_berlaku)->format('d M Y') }}</p>
                            </div>
                        </div>
                        <div class="company__history-area-items-right">
                            <div class="company__history-area-items-right-image">
                                <img src="{{ Storage::url('fotos/' . $akreditasiti->foto) }}" alt="{{ $akreditasiti->judul }}" style="width: 410px; height: 224px; object-fit: cover;"">
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>

@endsection