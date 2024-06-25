@extends('template.frontend')
@section('content')
<!-- Project Details Area Start -->
<div class="project__details section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="project__details-area">
                    <div class="project__details-area-image dark__image">
                        <img src="{{ Storage::url('fotos/' . $ruangkelas->foto) }}" alt=""style ="width: 1290px; height: 600px; object-fit: cover;">
                    </div>
                    </div>
                    <h3 class="mb-30" style="padding-top: 20px;">{{ $ruangkelas->nama }}</h3>
                    <p class="mb-35">{{ $ruangkelas->deskripsi }}</p>
                    {{-- <div class="project__details-area-list">
                        <span><i class="far fa-check"></i>It's essential to work with business consultants who have</span>
                        <span><i class="far fa-check"></i>Business consultants may charge by the project or hour, or you may need to pay daily or monthly retainers.</span>
                        <span><i class="far fa-check"></i>Meet with the board of directors and employees.</span>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project Details Area End -->
@endsection