@extends('dashboard.template')

@section('content')
    <div class="col-md-9">
        <div class="card">
        <div class="card-header">
            Dashboard
        </div>
        <div class="card-body">
            <h5 class="card-title">Selamat Datang Di Toko Isfahan {{ $userName }}</h5>
        </div>
        </div>
    </div>
@endsection