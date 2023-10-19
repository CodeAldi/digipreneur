@extends('layouts.dashboard')

@section('content')
@if (session('success'))
<div class="bs-toast toast toast-placement-ex m-2 fade bg-success top-0 end-0 show" role="alert" aria-live="assertive"
    aria-atomic="true" data-delay="2000">
    <div class="toast-header">
        <i class="bx bx-bell me-2"></i>
        <div class="me-auto fw-semibold">Success</div>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">{{ session('success') }}</div>
</div>
@endif
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
            <div class="table-responsive text-wrap h-100">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Materi</th>
                            <th class="text-start">Sub-Materi</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($materiPelatihan as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->materi_pelatihan }}</td>
                                <td class="text-start">
                                    <ol>
                                    @forelse ($item->sub_materi()->get() as $sub)
                                        <li>{{ $sub->sub_materi }}</li>
                                    @empty
                                        <span class="badge bg-warning mx-3">No Data</span>
                                        </ol>
                                    @endforelse
                                </td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('admin.pelatihan.edit',['id'=>$item->id]) }}"><i class="bx bx-edit-alt me-1"></i>
                                                Edit Judul Materi</a>
                                            <a class="dropdown-item" href="{{ route('admin.subMateri.index',['materi'=>$item->id]) }}"><i class="bx bxs-plus-circle me-1"></i>
                                                Add or Edit Sub-Materi</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="bg-warning text-white text-center fs-5">NO DATA</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection