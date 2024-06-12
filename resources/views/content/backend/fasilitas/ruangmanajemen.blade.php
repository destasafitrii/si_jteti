@extends('template.backend')

@section('content')
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Ruang Manajemen</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Ruang Manajemen</li>
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
                            <h4 class="header-title">Data Ruang Manajemen</h4>
                            <p class="card-title-desc text-end"> 
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#addModal">+ Tambah Data</button>
                            </p>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ruangmanajemen as $ruangmanajemen)
                                        <tr>
                                            <td>{{ $ruangmanajemen->nama }}</td>
                                            <td>{{ $ruangmanajemen->deskripsi }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    @if ($ruangmanajemen->foto)
                                                        <img src="{{ Storage::url('fotos/' . $ruangmanajemen->foto) }}"
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
                                                        data-bs-target="#showModal{{ $ruangmanajemen->id }}">Show</button>
                                                    <button type="button" class="btn btn-warning btn-sm mx-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editModal{{ $ruangmanajemen->id }}">Edit</button>
                                                    <button type="button" class="btn btn-danger btn-sm mx-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $ruangmanajemen->id }}">Delete</button>
                                                </div>
                                            </td>

                                        </tr>
                                        <!-- Show Modal -->
                                        <div class="modal fade bs-example-modal-center" id="showModal{{ $ruangmanajemen->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="showModalLabel{{ $ruangmanajemen->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="showModalLabel{{ $ruangmanajemen->id }}">
                                                            Detail Ruang Manajemen</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p><strong>Nama:</strong> {{ $ruangmanajemen->nama }}</p>
                                                        <p><strong>Deskripsi:</strong> {{ $ruangmanajemen->deskripsi }}</p>
                                                        @if ($ruangmanajemen->foto)
                                                            <p><strong>Foto:</strong></p>
                                                            <img src="{{ Storage::url('fotos/' . $ruangmanajemen->foto) }}"
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
                                        <div class="modal fade bs-example-modal-center" id="editModal{{ $ruangmanajemen->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="editModalLabel{{ $ruangmanajemen->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editModalLabel{{ $ruangmanajemen->id }}">Edit
                                                            Ruang Manajemen</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('ruangmanajemen.update', $ruangmanajemen->id) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group mb-4">
                                                                <label class="mb-2" for="nama">Nama</label>
                                                                <input id="nama" name="nama" class="form-control"
                                                                    value="{{ $ruangmanajemen->nama }}" required>
                                                            </div>
                                                            <div class="form-group mb-4">
                                                                <label class="mb-2" for="deskripsi">Deskripsi</label>
                                                                <input id="deskripsi" name="deskripsi" class="form-control"
                                                                    value="{{ $ruangmanajemen->deskripsi }}" required>
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
                                            id="deleteModal{{ $ruangmanajemen->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="deleteModalLabel{{ $ruangmanajemen->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel{{ $ruangmanajemen->id }}">
                                                            Delete Ruang Manajemen</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah Kamu Yakin Menghapus Data ini?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect"
                                                            data-bs-dismiss="modal" aria-label="Close">Close</button>
                                                        <form action="{{ route('ruangmanajemen.destroy', $ruangmanajemen->id) }}"
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
                                        <h5 class="modal-title" id="addModalLabel">Tambah Data Ruang Manajemen</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('ruangmanajemen.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group mb-4">
                                                <label class="mb-2" for="nama">Nama</label>
                                                <input id="nama" name="nama" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="mb-2" for="deskripsi">Deskripsi</label>
                                                <input id="deskripsi" name="deskripsi" class="form-control" required>
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
