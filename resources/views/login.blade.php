@extends('layouts.navbar_footer',[
  'title'=>'Login',
  'css'=> 'assets/css/auth.css'
  ])
@section('content')

  <main>
    <div class="main__card">
      <div class="heading">
        <h2 class="sh_1 fw_bold text_primary">Selamat Datang</h2>
        <p class="bt_4 fw_regular text_grey">Masuk dan tetap terhubung dengan <br> <span class="text_primary">Career Network!</span> </p>
      </div>
      <div class="form__group">
        <form action="{{ route('login') }}" method="post">
          @csrf

          @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
          </div>
          @endif

          <div class="input__group">
            <label class="bt_3 fw_medium" for="email">Alamat Email <span class="text_danger">*</span> </label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="input__group">
            <label class="bt_3 fw_medium" for="password">Kata Sandi <span class="text_danger">*</span> </label>
            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <a href="{{ route('password_request') }}" class="nav__link__secondary bt_3 float-end">Lupa Kata Sandi?</a>

          <button type="submit">Masuk</button>
        </form>
      </div>
      
      <p class="text_dark_grey text-center mt_20">Belum punya akun? <a href="{{ route('register') }}" class="nav__link__primary bt_3">Daftar Disini!</a></p>
    
    </div>
  </main>
@endsection