
@extends('layouts.navbar_footer',[
  'title'=>'Dashboard',
  'css'=>'assets/css/auth.css'
  ])
@section('content')
    <main>
      <div class="heading">
        @auth
          <h2 class="sh_1 fw_bold text_white mt_20">Selamat Datang {{ Auth::user()->name }}</h2>
        @else
          <h2 class="sh_1 fw_bold text_white mt_20">Selamat Datang di Halaman Dashboard</h2>
        @endauth
      </div>
    </main>
@endsection
    

   
