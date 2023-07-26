{{-- take a html layout --}}
@extends('layouts.main')

{{-- inject to html body --}}
@section('container')
    <h1 class="text-center">Halaman About</h1>
    <h2>Founder</h2><br><br>
    <h3>Nama    : {{ $name }}</h3>
    <h3>Email   : {{ $email }}</h3>
    <img src="img/{{ $image }}" alt="{{ $email }}" width="200" class="img-thumbnail rounded-circle img-fluid">
@endsection