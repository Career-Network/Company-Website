
@extends('layouts.navbar_footer',[
  'title'=>'Career Network',
  'css'=>'assets/css/login.css'
  ])
@section('content')
    <main>
      <div class="heading">
        @auth
          <p class="title">Selamat Datang {{ Auth::user()->name }}</p>
          <p>This button only show up when user logged in!</p>
          <a class="btn btn-primary" href="">Just Button</a>
        @else
          <p class="title">Selamat Datang di Halaman Utama</p>
        @endauth
      </div>
    </main>
@endsection
    

   
