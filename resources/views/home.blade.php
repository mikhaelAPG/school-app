@extends('layout.template')

@section('title', 'Home')

@section('content')
    <h1>Home Page</h1>
    <h4>{{ $nama_sekolah }}</h4><br>
    <h4>{{ $alamat }}</h4>
@endsection