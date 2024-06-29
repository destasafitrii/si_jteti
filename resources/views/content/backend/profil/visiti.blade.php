@extends('template.backend')

@section('content')
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Visi Misi Teknologi Informasi</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Profil</a></li>
                        <li class="breadcrumb-item active">Visi Misi Teknologi Informasi</li>
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
                            <h4 class="header-title">Data Visi Misi Teknologi Informasi</h4>
                            <p class="card-title-desc text-end">
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#addModal">+ Tambah Data</button>
                            </p>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 300px;">Visi</th>
                                            <th style="min-width: 300px;">Misi</th>
                                            <th style="min-width: 100px;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($visitis as $visiti)
                                            <tr>
                                                <td style="max-width: 300px; overflow: hidden; text-overflow: ellipsis;"
                                                    title="{{ $visiti->visi }}">
                                                    {{ $visiti->visi }}
                                                <td style="max-width: 300px; overflow: hidden; text-overflow: ellipsis;"
                                                    title="{{ $visiti->misi }}">
                                                    {{ $visiti->misi }}
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <button type="button" class="btn btn-info btn-sm mx-1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#showModal{{ $visiti->id }}">Show</button>
                                                        <button type="button" class="btn btn-warning btn-sm mx-1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editModal{{ $visiti->id }}">Edit</button>
                                                        <button type="button" class="btn btn-danger btn-sm mx-1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal{{ $visiti->id }}">Delete</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Show Modal -->
                                            <div class="modal fade bs-example-modal-center"
                                                id="showModal{{ $visiti->id }}" tabindex="-1" role="dialog"
                                                aria-labelledby="showModalLabel{{ $visiti->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="showModalLabel{{ $visiti->id }}">
                                                                Detail Visi Misi Teknologi Informasi</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p><strong>Visi:</strong> {{ $visiti->visi }}</p>
                                                            <p><strong>Misi:</strong> {{ $visiti->misi }}</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect"
                                                                data-bs-dismiss="modal" aria-label="Close">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Edit Modal -->
                                            <div class="modal fade bs-example-modal-center"
                                                id="editModal{{ $visiti->id }}" tabindex="-1" role="dialog"
                                                aria-labelledby="editModalLabel{{ $visiti->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel{{ $visiti->id }}">
                                                                Edit
                                                                Visi Misi Teknologi Informasi</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('visi-misi-ti.update', $visiti->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="form-group mb-4">
                                                                    <label class="mb-2" for="visi">Visi</label>
                                                                    <input id="visi" name="visi"
                                                                        class="form-control" value="{{ $visiti->visi }}"
                                                                        required>
                                                                </div>
                                                                <div class="form-group mb-4">
                                                                    <label class="mb-2" for="misi">Misi</label>
                                                                    <textarea id="misi" name="misi" class="form-control" required>{{ $visiti->misi }}</textarea>
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-end align-items-end mt-4">
                                                                    <button
                                                                        class="btn btn-primary waves-effect waves-light"
                                                                        type="submit">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Delete Modal -->
                                            <div class="modal fade bs-example-modal-center"
                                                id="deleteModal{{ $visiti->id }}" tabindex="-1" role="dialog"
                                                aria-labelledby="deleteModalLabel{{ $visiti->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteModalLabel{{ $visiti->id }}">
                                                                Delete Visi Misi Teknologi Informasi</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Apakah Anda Yakin Menghapus Data Ini?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect"
                                                                data-bs-dismiss="modal" aria-label="Close">Close</button>
                                                            <form
                                                                action="{{ route('visi-misi-ti.destroy', $visiti->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div>
                                                                    <button class="btn btn-danger waves-effect waves-light"
                                                                        type="submit">Delete</button>
                                                                </div>
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
                                            <h5 class="modal-title" id="addModalLabel">Tambah Data Visi Misi Teknologi
                                                Informasi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('visi-misi-ti.store') }}" method="POST">
                                                @csrf
                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="visi">Visi</label>
                                                    <input id="visi" name="visi" class="form-control" required>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="mb-2" for="misi">Misi</label>
                                                    <textarea id="misi" name="misi" class="form-control" required></textarea>
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

                        </div>
                        <!-- end col -->
                    </div> <!-- end row -->
                </div>
                <!-- end container-fluid -->
            </div>
        @endsection
