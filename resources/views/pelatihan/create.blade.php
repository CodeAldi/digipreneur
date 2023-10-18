@extends('layouts.dashboard')

@section('content')
    <div class="card col-8 text-center mx-auto">
        <h5 class="card-header">Create Materi Pelatihan</h5>
        <div class="card-body">
            <form method="POST" action="#">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="judul">Judul Materi Pelatihan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul_materi" />
                    </div>
                </div>
                <div class="row d-flex justify-content-end">
                    <div class="col col-sm-10 col-md-2 d-flex justify-content-end">
                        <a href="{{ route('admin.pelatihan.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                    <div class="col col-sm-10 col-md-2">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection