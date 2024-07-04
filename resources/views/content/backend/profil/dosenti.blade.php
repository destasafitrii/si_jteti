@extends('template.backend')

@section('content')
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Dosen Teknologi Informasi</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Profil</a></li>
                        <li class="breadcrumb-item active">Dosen Teknologi Informasi</li>
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
                            <h4 class="header-title">Data Dosen Teknologi Informasi</h4>
                            <p class="card-title-desc text-end"> 
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#addModal">+ Tambah Data</button>
                            </p>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>NIDN/NIP</th>
                                        <th>Jabatan</th>
                                        <th>Keahlian</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dosentis as $dosenti)
                                        <tr>
                                            <td>{{ $dosenti->nama }}</td>
                                            <td>{{ $dosenti->email }}</td>
                                            <td>{{ $dosenti->nip }}</td>
                                            <td>{{ $dosenti->jabatan }}</td>
                                            <td>{{ $dosenti->keahlian }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    @if ($dosenti->foto)
                                                        <img src="{{ Storage::url('fotos/' . $dosenti->foto) }}"
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
                                                        data-bs-target="#showModal{{ $dosenti->id }}">Show</button>
                                                    <button type="button" class="btn btn-warning btn-sm mx-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editModal{{ $dosenti->id }}">Edit</button>
                                                    <button type="button" class="btn btn-danger btn-sm mx-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $dosenti->id }}">Delete</button>
                                                </div>
                                            </td>

                                        </tr>
                                        <!-- Show Modal -->
                                        <div class="modal fade bs-example-modal-center" id="showModal{{ $dosenti->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="showModalLabel{{ $dosenti->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="showModalLabel{{ $dosenti->id }}">
                                                            Detail Dosen Teknologi Informasi</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p><strong>Nama:</strong> {{ $dosenti->nama }}</p>
                                                        <p><strong>NIDN/NIP:</strong> {{ $dosenti->nip }}</p>
                                                        <p><strong>Jabatan:</strong> {{ $dosenti->jabatan }}</p>
                                                        <p><strong>Keahlian:</strong> {{ $dosenti->keahlian }}</p>
                                                        <p><strong>Email:</strong> {{ $dosenti->email }}</p>
                                                        @if ($dosenti->foto)
                                                            <p><strong>Foto:</strong></p>
                                                            <img src="{{ Storage::url('fotos/' . $dosenti->foto) }}"
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
                                        <div class="modal fade bs-example-modal-center" id="editModal{{ $dosenti->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="editModalLabel{{ $dosenti->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editModalLabel{{ $dosenti->id }}">Edit
                                                            Dosen Teknologi Informasi</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('dosen-teknologi-informasi.update', $dosenti->id) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group mb-4">
                                                                <label class="mb-2" for="nama">Nama</label>
                                                                <input id="nama" name="nama" class="form-control"
                                                                    value="{{ $dosenti->nama }}" required>
                                                            </div>
                                                            <div class="form-group mb-4">
                                                                <label class="mb-2" for="email">Email</label>
                                                                <input id="email" name="email" class="form-control"
                                                                    value="{{ $dosenti->email }}" required>
                                                            </div>
                                                            <div class="form-group mb-4">
                                                                <label class="mb-2" for="nip">NIDN/NIP</label>
                                                                <input id="nip" name="nip" class="form-control"
                                                                    value="{{ $dosenti->nip }}" required>
                                                            </div>
                                                            <div class="form-group mb-4">
                                                                <label class="mb-2" for="jabatan">Jabatan</label>
                                                                <input id="jabatan" name="jabatan" class="form-control"
                                                                    value="{{ $dosenti->jabatan }}" required>
                                                            </div>
                                                            <div class="form-group mb-4">
                                                                <label class="mb-2" for="keahlian">Keahlian</label>
                                                                <input id="keahlian" name="keahlian" class="form-control"
                                                                    value="{{ $dosenti->keahlian }}" required>
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
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Delete Modal -->
                                        <div class="modal fade bs-example-modal-center"
                                            id="deleteModal{{ $dosenti->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="deleteModalLabel{{ $dosenti->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel{{ $dosenti->id }}">
                                                            Delete Dosen Teknologi Informasi</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah Anda Yakin Menghapus Data Ini?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect"
                                                            data-bs-dismiss="modal" aria-label="Close">Close</button>
                                                        <form action="{{ route('dosen-teknologi-informasi.destroy', $dosenti->id) }}"
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
                                        <h5 class="modal-title" id="addModalLabel">Tambah Data Dosen Teknologi Informasi</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('dosen-teknologi-informasi.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group mb-4">
                                                <label class="mb-2" for="nama">Nama</label>
                                                <input id="nama" name="nama" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="mb-2" for="email">Email</label>
                                                <input id="email" name="email" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="mb-2" for="nip">NIDN/NIP</label>
                                                <input id="nip" name="nip" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="mb-2" for="jabatan">Jabatan</label>
                                                <input id="jabatan" name="jabatan" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="mb-2" for="keahlian">Keahlian</label>
                                                <input id="keahlian" name="keahlian" class="form-control" required>
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
