@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <h5>Manage : Materi Pelatihan</h5>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('admin.pelatihan.create') }}" class="btn btn-primary float-end"><i
                            class='menu-icon bx bxs-plus-square'></i>Tambah Materi Pelatihan</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Materi</th>
                            <th>Sub-Materi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td colspan="4" class="bg-warning text-white fs-5">Data Masih Kosong</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Materi 1</td>
                            <td>
                                <ol>
                                    <li>sub topik 1</li>
                                    <li>sub topik 2</li>
                                    <li>sub topik 3</li>
                                    <li>sub topik 4</li>
                                    <li>sub topik 5</li>
                                </ol>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Materi 2</td>
                            <td>
                                <ol>
                                    <li>sub topik 1</li>
                                    <li>sub topik 2</li>
                                    <li>sub topik 3</li>
                                    <li>sub topik 4</li>
                                    <li>sub topik 5</li>
                                </ol>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection