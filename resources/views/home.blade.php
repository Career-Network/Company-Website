@extends('layouts.mainlayout')
@section('title', 'Home')

@section('content')
      <div class="container mt-5">
        <h1>Ini adalah halaman Home</h1>
        <h2>Selamat datang, {{ $name }}. Anda adalah {{ $role }}</h2>


        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
            </tr>
            @foreach ( $buah as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                 {{ $data }} <br>
                </td>
            </tr>
            @endforeach
        </table>
@endsection
