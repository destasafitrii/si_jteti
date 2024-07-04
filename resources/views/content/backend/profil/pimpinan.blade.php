@extends('template.backend')

@section('content')
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Pimpinan</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Profil</a></li>
                        <li class="breadcrumb-item active">Pimpinan</li>
                    </ol>
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
                            <p class="card-title-desc text-end"> 
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#addModal">+ Tambah Data</button>
                            </p>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>NIP</th>
                                        <th>Jabatan</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pimpinans as $pimpinan)
                                        <tr>
                                            <td >{{ $pimpinan->nama }}</td>
                                            <td >{{ $pimpinan->nik }}</td>
                                            <td >{{ $pimpinan->nip }}</td>
                                            <td >{{ $pimpinan->jabatan }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    @if ($pimpinan->foto)
                                                        <img src="{{ Storage::url('fotos/' . $pimpinan->foto) }}"
                                                            alt="Foto" width="50">
                                                    @else
                                                        Tidak ada foto
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <button type="button" class="btn btn-info btn-sm mx-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#showModal{{ $pimpinan->id }}">Show</button>
                                                    <button type="button" class="btn btn-warning btn-sm mx-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editModal{{ $pimpinan->id }}">Edit</button>
                                                    <button type="button" class="btn btn-danger btn-sm mx-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $pimpinan->id }}">Delete</button>
                                                </div>
                                            </td>

                                        </tr>
                                        <!-- Show Modal -->
                                        <div class="modal fade bs-example-modal-center" id="showModal{{ $pimpinan->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="showModalLabel{{ $pimpinan->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="showModalLabel{{ $pimpinan->id }}">
                                                            Detail Pimpinan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p><strong>Nama:</strong> {{ $pimpinan->nama }}</p>
                                                        <p><strong>NIK:</strong> {{ $pimpinan->nik }}</p>
                                                        <p><strong>NIP:</strong> {{ $pimpinan->nip }}</p>
                                                        <p><strong>Jabatan:</strong> {{ $pimpinan->jabatan }}</p>
                                                        @if ($pimpinan->foto)
                                                            <p><strong>Foto:</strong></p>
                                                            <img src="{{ Storage::url('fotos/' . $pimpinan->foto) }}"
                                                                alt="Foto" width="150">
                                                        @else
                                                            <p><strong>Foto:</strong> Tidak ada foto</p>
                                                        @endif
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect"
                                                            data-bs-dismiss="modal" aria-label="Close">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Edit Modal -->
                                        <div class="modal fade bs-example-modal-center" id="editModal{{ $pimpinan->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="editModalLabel{{ $pimpinan->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editModalLabel{{ $pimpinan->id }}">Edit
                                                            Pimpinan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('pimpinan.update', $pimpinan->id) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group mb-4">
                                                                <label class="mb-2" for="nama">Nama</label>
                                                                <input id="nama" name="nama" class="form-control"
                                                                    value="{{ $pimpinan->nama }}" required>
                                                            </div>
                                                            <div class="form-group mb-4">
                                                                <label class="mb-2" for="nik">NIK</label>
                                                                <input id="nik" name="nik" class="form-control"
                                                                    value="{{ $pimpinan->nik }}" required>
                                                            </div>
                                                            <div class="form-group mb-4">
                                                                <label class="mb-2" for="nip">NIP</label>
                                                                <input id="nip" name="nip" class="form-control"
                                                                    value="{{ $pimpinan->nip }}" required>
                                                            </div>
                                                            <div class="form-group mb-4">
                                                                <label class="mb-2" for="jabatan">Jabatan</label>
                                                                <input id="jabatan" name="jabatan" class="form-control"
                                                                    value="{{ $pimpinan->jabatan }}" required>
                                                            </div>
                                                            <div class="form-group mb-4">
                                                                <label class="mb-2" for="foto">Foto</label>
                                                                <input type="file" id="foto" name="foto"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary waves-effect"
                                                                    data-bs-dismiss="modal" aria-label="Close">Close</button>
                                                                <button class="btn btn-primary waves-effect waves-light"
                                                                    type="submit">Submit</button>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Delete Modal -->
                                        <div class="modal fade bs-example-modal-center"
                                            id="deleteModal{{ $pimpinan->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="deleteModalLabel{{ $pimpinan->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel{{ $pimpinan->id }}">
                                                            Delete Pimpinan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah Anda Yakin Menghapus Data Ini?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect"
                                                            data-bs-dismiss="modal" aria-label="Close">Close</button>
                                                        <form action="{{ route('pimpinan.destroy', $pimpinan->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div>
                                                                <button class="btn btn-danger waves-effect waves-light"
                                                                    type="submit">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        </div>
                        @endforeach
                        </tbody>
                        </table>

                        <!-- Add Modal -->
                        <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
                            aria-labelledby="addModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addModalLabel">Tambah Data Pimpinan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
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
                                                <label class="mb-2" for="nik">NIK</label>
                                                <input id="nik" name="nik" class="form-control" required>
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
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect"
                                                    data-bs-dismiss="modal" aria-label="Close">Close</button>
                                                    <button class="btn btn-primary waves-effect waves-light"
                                                        type="submit">Submit</button>
                                            </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div> <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
    @endsection
