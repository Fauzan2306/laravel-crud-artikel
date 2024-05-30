@extends('layouts.main')

@section('container')
    <div class="container mt-3">
        <h1>{{ $nama }}</h1>
        <h3>{{ $email }}</h3>
        <img src="img/{{ $image }}" alt="{{ $nama }}" width="200px" class="img-tumbhnail rounded-circle">
    </div>
@endsection
