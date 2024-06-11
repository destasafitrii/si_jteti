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
                            <p class="card-title-desc text-end"> 
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#addModal">+ Tambah Data</button>
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
                                    @foreach ($pimpinans as $pimpinan)
                                        <tr>
                                            <td >{{ $pimpinan->nama }}</td>
                                            <td >{{ $pimpinan->nidn }}</td>
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
                                                        <p><strong>NIDN:</strong> {{ $pimpinan->nidn }}</p>
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
                                                                <label class="mb-2" for="nidn">NIDN</label>
                                                                <input id="nidn" name="nidn" class="form-control"
                                                                    value="{{ $pimpinan->nidn }}" required>
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
                                                            <div class="d-flex justify-content-end align-items-end mt-4">
                                                                <button class="btn btn-primary waves-effect waves-light"
                                                                    type="submit">Submit</button>
                                                            </div>
                                                        </form>
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
                                                        <p>Are you sure you want to delete this pimpinan?</p>
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
