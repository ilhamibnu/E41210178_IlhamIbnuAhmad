@extends('layouts.main')

@include('partials.navbar')

@section('container')
    <div class="container mt-4">
        <h1>About</h1>
    </div>
    <div class="containe mt-5">
        <h6>Nim : {{ $nim }}</h6>
        <h6>Nama : {{ $nama }}</h6>
        <h6>Prodi : {{ $prodi }}</h6>
        <h6>Jurusan : {{ $jurusan }}</h6>
        <img src="{{ $imgurl }}" alt="" width="200">
    </div>
@endsection
