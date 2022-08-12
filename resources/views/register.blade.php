@extends('layouts.navbar_footer',[
  'title'=>'Login',
  'css'=>'assets/css/auth.css'
  ])
@section('content')

  <main>
    <div class="main__card">

      <div class="heading">
        <h2 class="sh_1 fw_bold text_primary">Pendaftaran Akun</h2>
        <p class="bt_4 fw_regular text_grey">Ayo perluas koneksimu bersama<br><span class="text_primary">Career Network!</span> </p>
      </div>

      <div class="form__group">
        <form action="{{ route('register') }}" method="post">
          @csrf

          @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>    
          @endif

          <div class="input__group">
            <label class="bt_3 fw_medium" for="name">Nama Lengkap <span class="text_danger">*</span> </label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

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
            <label class="bt_3 fw_medium" for="number">No Handphone <span class="text_danger">*</span> </label>
            <input type="number" name="number" id="number" class="form-control @error('number') is-invalid @enderror" value="{{ old('number') }}">
            @error('number')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          
          <div class="input__group">
            <label class="bt_3 fw_medium" for="password">Kata Sandi <span class="text_danger">*</span> </label>
            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
            <label class="bt_4 fw_regular text_grey mt_8 mb_0">Minimal 8 karakter dengan kombinasi huruf kecil, huruf besar, dan angka</label>
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
  
            <div class="input__group">
              <label class="bt_3 fw_medium" for="confirm_password">Konfirmasi Kata Sandi <span class="text_danger">*</span> </label>
              <input type="password" name="confirm_password" id="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror">
              @error('confirm_password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          
          <button type="submit">Daftar</button>
        </form>
      </div>
      
      <p class="text_dark_grey text-center mt_20">Sudah punya akun? <a href="{{ route('login') }}" class="nav__link__primary bt_3">Masuk Disini!</a></p>
    
    </div>
  </main>
@endsection