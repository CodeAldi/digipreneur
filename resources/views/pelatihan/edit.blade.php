@extends('layouts.dashboard')

@section('content')
<div class="card col-8 text-center mx-auto">
    <h5 class="card-header">Edit Materi Pelatihan</h5>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.pelatihan.update',['id'=>$pelatihan->id]) }}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="judul">Judul Materi Pelatihan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('materi_pelatihan') is-invalid @enderror" id="judul"
                        name="materi_pelatihan" value="{{ $pelatihan->materi_pelatihan }}" />
                    @error('materi_pelatihan')
                    <div class="form-text text-start text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row d-flex justify-content-end">
                <div class="col col-sm-10 col-md-2 d-flex justify-content-end">
                    <a href="{{ route('admin.pelatihan.index') }}" class="btn btn-secondary">Back</a>
                </div>
                <div class="col col-sm-10 col-md-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection