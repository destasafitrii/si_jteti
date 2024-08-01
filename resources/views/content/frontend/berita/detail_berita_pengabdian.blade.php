@extends('template.frontend')
@section('content')
<!-- News Details Area Start -->
<div class="news__details section-padding" style="padding: 40px 0px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="news__details-left">
                    <div class="news__details-left-meta">
                        <div class="dark__image">
                            <img class="img__full mt-35 mb-30" src="{{ Storage::url('fotos/' . $beritapengabdian->foto) }}" alt="">
                        </div>
                        <ul>
                            <li>
                                <div class="news__details-left-meta-date">
                                    <span class="text-three">{{ $beritapengabdian->created_at->format('d') }}</span>
                                    <span class="text-five">{{ $beritapengabdian->created_at->format('M') }}</span>
                                    <span class="text-five">{{ $beritapengabdian->created_at->format('Y') }}</span>
                                </div>
                            </li>
                        </ul>
                        <h3 class="mt-20">{{ $beritapengabdian->judul }}</h3>
                    </div>
                    <p>{{ $beritapengabdian->deskripsi }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- News Details Area End -->
@endsection
