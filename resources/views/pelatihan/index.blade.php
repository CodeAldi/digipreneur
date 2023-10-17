@extends('layouts.dashboard')

@section('content')
    <div class="card h-100">
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
            <div class="table-responsive text-nowrap h-100">
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection