@extends('template.backend')

@section('content')
       <!-- Page-Title -->
       <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Dashboard</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Selamat Datang, {{ Auth::user()->name }} di Halaman Admin</li>
                    </ol>
                </div>  
            </div>
        </div>
    </div>
    <!-- end page title end breadcrumb -->
@endsection
