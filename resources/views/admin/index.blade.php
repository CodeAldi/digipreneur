@extends('layouts.dashboard')

@section('content')
        <div class="card h-100">
            <h5 class="card-header">
                Dashboard {{ auth()->user()->role }}
            </h5>
        </div>
@endsection