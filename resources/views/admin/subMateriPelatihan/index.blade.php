@extends('layouts.dashboard')

@section('content')
    <div class="card h-100">
        <div class="card-header">
            <h5 class="text-capitalize">{{ $materinya->materi_pelatihan }}</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.subMateri.store') }}" method="POST" class="mb-4">
                @csrf
                <div class="row ">
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="basic-default-name" placeholder="Sub-materi" name="sub_materi" />
                    </div>
                    <input type="text" value="{{ $materinya->id }}" hidden readonly name="materi_pelatihan_id">
                    <button class="btn btn-success col-sm-2">Add Sub-Materi</button>
                </div>
            </form>
            <div class="table-responsive text-wrap h-100">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-start">Sub-Materi</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($submaterinya as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->sub_materi }}</td>
                                <td class="text-end"><a href="{{ route('admin.subMateri.delete',['sub_materi'=>$item->id]) }}" class="btn btn-danger"><i class='bx bx-trash-alt pb-1'></i>Delete</a></td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center text-white bg-warning">No Data</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection