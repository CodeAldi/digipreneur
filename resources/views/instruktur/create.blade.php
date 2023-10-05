@extends('layouts.dashboard')

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Create Instructor account</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.user.store') }}">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="nama" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <input type="text" id="basic-default-email" class="form-control" name="email"/>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="basic-default-name" name="password"/>
                        <div class="form-text">You can use letters, numbers & periods</div>
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