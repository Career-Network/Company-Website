
@extends('layouts.navbar_footer',['title'=>'Career Network'])
@section('content')
    <main>
      <div class="heading" style="margin-top: 170px">
        <p class="title">Selamat Datang di Halaman Utama</p>
        {{-- <p>{{ Auth::user()->name }}</p> --}}
        @auth
        <p>This button only show up when user logged in!</p>
        <a class="btn btn-primary" href="">Just Button</a>
        @endauth
      </div>
    </main>
    
@endsection
    

   
