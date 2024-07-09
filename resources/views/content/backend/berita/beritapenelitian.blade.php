@extends('template.backend')

@section('content')
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Berita Penelitian</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Berita</a></li>
                        <li class="breadcrumb-item active">Berita Penelitian</li>
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
                            <h4 class="header-title">Data Berita Penelitian</h4>
                            <p class="card-title-desc text-end"> 
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#addModal">+ Tambah Data</button>
                            </p>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                        <th style="min-width: 150px;">Judul</th>
                                        <th style="min-width: 300px;">Deskripsi</th>
                                        <th style="min-width: 100px;">Foto</th>
                                        <th style="min-width: 100px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($beritapenelitians as $beritapenelitian)
                                        <tr>
                                            <td>{{ $beritapenelitian->judul }}</td>
                                            <td style="max-width: 150px; overflow: hidden; text-overflow: ellipsis;" 
                                            title="{{ $beritapenelitian->deskripsi }}">
                                            {{ $beritapenelitian->deskripsi }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    @if ($beritapenelitian->foto)
                                                        <img src="{{ Storage::url('fotos/' . $beritapenelitian->foto) }}"
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
                                                        data-bs-target="#showModal{{ $beritapenelitian->id }}">Show</button>
                                                    <button type="button" class="btn btn-warning btn-sm mx-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editModal{{ $beritapenelitian->id }}">Edit</button>
                                                    <button type="button" class="btn btn-danger btn-sm mx-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $beritapenelitian->id }}">Delete</button>
                                                </div>
                                            </td>

                                        </tr>
                                        <!-- Show Modal -->
                                        <div class="modal fade bs-example-modal-center" id="showModal{{ $beritapenelitian->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="showModalLabel{{ $beritapenelitian->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="showModalLabel{{ $beritapenelitian->id }}">
                                                            Detail Berita Penelitian</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p><strong>Judul:</strong> {{ $beritapenelitian->judul }}</p>
                                                        <p><strong>Deskripsi:</strong> {{ $beritapenelitian->deskripsi }}</p>
                                                        @if ($beritapenelitian->foto)
                                                            <p><strong>Foto:</strong></p>
                                                            <img src="{{ Storage::url('fotos/' . $beritapenelitian->foto) }}"
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
                                        <div class="modal fade bs-example-modal-center" id="editModal{{ $beritapenelitian->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="editModalLabel{{ $beritapenelitian->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editModalLabel{{ $beritapenelitian->id }}">Edit
                                                            Berita Penelitian</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('berita-penelitian.update', $beritapenelitian->id) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group mb-4">
                                                                <label class="mb-2" for="judul">Judul</label>
                                                                <input id="judul" name="judul" class="form-control"
                                                                    value="{{ $beritapenelitian->judul }}" required>
                                                            </div>
                                                            <div class="form-group mb-4">
                                                                <label class="mb-2" for="deskripsi">Deskripsi</label>
                                                                <input id="deskripsi" name="deskripsi" class="form-control"
                                                                    value="{{ $beritapenelitian->deskripsi }}" required>
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
                                            id="deleteModal{{ $beritapenelitian->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="deleteModalLabel{{ $beritapenelitian->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel{{ $beritapenelitian->id }}">
                                                            Delete Berita Penelitian</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah Anda Yakin menghapus Data Ini?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect"
                                                            data-bs-dismiss="modal" aria-label="Close">Close</button>
                                                        <form action="{{ route('berita-penelitian.destroy', $beritapenelitian->id) }}"
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
                        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addModalLabel">Tambah Data Berita Penelitian</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('berita-penelitian.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group mb-4">
                                                <label class="mb-2" for="judul">Judul</label>
                                                <input id="judul" name="judul" class="form-control" required>
                                            </div>
                        
                                            <div class="form-group mb-4">
                                                <label class="mb-2" for="deskripsi">Deskripsi</label>
                                                <input id="deskripsi" name="deskripsi" class="form-control" required>
                                            </div>
                        
                                            <div class="form-group mb-4">
                                                <label class="mb-2" for="foto">Foto</label>
                                                <input type="file" id="foto" name="foto" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
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
