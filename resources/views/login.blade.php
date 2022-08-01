@extends('layouts.navbar_footer',[
  'title'=>'Login',
  'css'=> 'assets/css/login.css'
  ])
@section('content')

  <main>
    <div class="heading">
      <p class="title">STAY CONNECTED</p>
      <p class="sub__title">Ayo Mulai Cari Koneksimu Disini</p>
    </div>
    <div class="form__group ">
      <form action="{{ route('login') }}" method="post" >
        @csrf
        @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>    
        @endif
        <div class="input__group position-relative">
          <label for="email">Email Address</label>
          <input
            type="email"
            name="email"
            id="email"
            class="form-control @error('email') is-invalid @enderror"
            placeholder="Masukkan Email Anda"
            required
            value="{{ old('email') }}"
            autofocus
          />
          @error('email')
            <div class="form-control invalid-tooltip">
              {{ $message }}
            </div>
          @enderror
        </div>
        
        <div class="input__group position-relative">
          <label for="password">Password</label>
          <input
            type="password"
            name="password"
            id="password"
            class=" @error('password') is-invalid @enderror"
            placeholder="Masukkan Password Anda"
            required
          />
          @error('password')
            <div class="form-control invalid-tooltip">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="button__group">
          <button type="submit" class="btn__masuk">Masuk</button> <br />
          <a href="{{ route('register') }}" class="btn btn__daftar">
            Daftar Sekarang
          </a>
          <a href="{{ route('password_request') }}" class="btn mb-3" style="background-color:#268e9b ">
            Forgot password
          </a>
        </div>
      </form>
    </div>
  </main>
@endsection