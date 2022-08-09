@extends('layouts.navbar_footer',[
  'title'=>'Reset Password',
  'css'=>'assets/css/auth.css'
  ])
@section('content')
<main>

  {{-- izin komen bang takut ada error --}}
  {{-- @if(session()->has('status'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>    
@endif --}}

  <div class="main__card">
    <div class="heading">
      <h2 class="sh_1 fw_bold text_primary">Lupa Kata Sandi?</h2>
    </div>
    <div class="form__group">
      <form action="{{ route('password_update') }}" method="post">
        @csrf
        <div class="input__group">
          <label class="bt_3 fw_medium">Alamat Email <span class="text_danger">*</span> </label>
          <input type="hidden" name="token" value="{{ $token }}">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" >
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <div class="input__group">
          <label class="bt_3 fw_medium">Kata Sandi Baru <span class="text_danger">*</span> </label>
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
          <label class="bt_4 fw_regular text_grey mt_8 mb_0">Minimal 8 karakter dengan kombinasi huruf kecil, huruf besar, dan angka</label>
        </div>

        <div class="input__group">
          <label class="bt_3 fw_medium">Konfirmasi Kata Sandi Baru <span class="text_danger">*</span> </label>
          <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
        </div>

        <button type="submit">Ubah Kata Sandi</button>
      </form>
    </div>
  </div>

</main>
@endsection