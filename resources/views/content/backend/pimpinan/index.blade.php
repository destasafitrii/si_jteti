@extends('template.backend')

@section('content')
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="page-title mb-1">Pimpinan</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                    <li class="breadcrumb-item active">Pimpinan</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown d-inline-block">
                        <button type="button"
                            class="btn btn-light rounded-pill user text-start d-flex align-items-center"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-settings-outline me-1"></i> Settings
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->

<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Data Pimpinan</h4>
                        <p class="card-title-desc">
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target=".bs-example-modal-lg">+ Tambah Data</button>
                        </p>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NIDN</th>
                                    <th>NIP</th>
                                    <th>Jabatan</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pimpinans as $pimpinan)
                                    <tr>
                                        <td>{{ $pimpinan->nama }}</td>
                                        <td>{{ $pimpinan->nidn }}</td>
                                        <td>{{ $pimpinan->nip }}</td>
                                        <td>{{ $pimpinan->jabatan }}</td>
                                        <td>
                                            @if($pimpinan->foto)
                                                <img src="{{ Storage::url('fotos/' . $pimpinan->foto) }}" alt="Foto" width="50">
                                            @else
                                                Tidak ada foto
                                            @endif
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!--  Modal content for the above example -->
                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Tambah Data Pimpinan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span class="mdi mdi-close"></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('pimpinan.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="nama">Nama</label>
                                                    <input id="nama" name="nama" class="form-control" required>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="nidn">NIDN</label>
                                                    <input id="nidn" name="nidn" class="form-control" required>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="nip">NIP</label>
                                                    <input id="nip" name="nip" class="form-control" required>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="jabatan">Jabatan</label>
                                                    <input id="jabatan" name="jabatan" class="form-control" required>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="foto">Foto</label>
                                                    <input type="file" id="foto" name="foto"
                                                        class="form-control">
                                                </div>
                                                <div class="d-flex justify-content-end align-items-end mt-4">
                                                    <button class="btn btn-primary waves-effect waves-light"
                                                        type="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
@endsection
