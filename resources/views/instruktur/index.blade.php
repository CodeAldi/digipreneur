@extends('layouts.dashboard')

@section('content')
    @if (session('statusSuccess'))
        <div class="bs-toast toast toast-placement-ex m-2 fade bg-success top-0 end-0 show" role="alert" aria-live="assertive" aria-atomic="true"
            data-delay="2000">
            <div class="toast-header">
                <i class="bx bx-bell me-2"></i>
                <div class="me-auto fw-semibold">Success</div>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">{{ session('statusSusccess') }}</div>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <h5>Instruktur</h5>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('admin.instruktur.create') }}" class="btn btn-primary float-end"><i class='menu-icon bx bxs-plus-square'></i>Tambah Instruktur</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>email</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($dataInstruktur as $item)
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> {{ $item->user['name'] }} </td>
                                <td>{{ $item->user['email'] }}</td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
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
                        @empty
                        {{-- tampilan jika data kosong --}}
                        <tr>
                            <td colspan="4" class="text-center bg-warning text-white">Data Masih Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection