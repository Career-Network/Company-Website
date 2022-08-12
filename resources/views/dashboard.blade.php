
@extends('layouts.navbar_footer',[
  'title'=>'Career Network',
  'css'=>'assets/css/auth.css'
  ])
@section('content')
    <main>
      <div class="heading">
        @auth
          <h2 class="sh_1 fw_bold text_white mt_20">Selamat Datang {{ Auth::user()->name }}</h2>
          <p>This button only show up when user logged in!</p>
          <a class="btn btn-primary" href="">Just Button</a>
        @else
          <h2 class="sh_1 fw_bold text_white mt_20">Selamat Datang di Halaman Utama</h2>
        @endauth
      </div>
    </main>
@endsection
    

   
