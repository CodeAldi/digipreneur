@extends('layouts.dashboard')

@section('content')
    <div class="card h-100">
        <h5 class="card-header">Create Materi Pelatihan</h5>
        <div class="card-body">
            <form method="POST" action="#">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Materi Pelatihan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="judul_materi" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-email">Sub-Materi</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <input type="text" id="basic-default-email" class="form-control" name="sub_materi" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="keterangan_materi" />
                        {{-- <div class="form-text">You can use letters, numbers & periods</div> --}}
                    </div>
                </div>
            
                <input type="text" name="role" value="instruktur" readonly hidden>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection