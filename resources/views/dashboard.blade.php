
@extends('layouts.navbar_footer',[
  'title'=>'Dashboard',
  'css'=>'assets/css/auth.css'
  ])
@section('content')
    <main>
      <div class="heading">
        @auth
          <h2 class="sh_1 fw_bold text_white mt_20">Selamat Datang {{ Auth::user()->name }}</h2>
          <h4 class="sh_1 fw_bold text_white mt_20">This page is under development!</h4>
        @else
          <h2 class="sh_1 fw_bold text_white mt_20">Selamat Datang di Halaman Dashboard</h2>
          <h4 class="sh_1 fw_bold text_white mt_20">This page is under development!</h4>
        @endauth
      </div>
    </main>
@endsection
    

   
