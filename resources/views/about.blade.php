@extends('layouts.main')

@section('container')
<div class="container mt-4">
    <h1>Halaman About</h1>
    </div>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $img }}"alt="{{ $name }}"width="200" class="img-thumbnail rounded-circle">
@endsection