@extends('layouts.navbar_footer',[
  'title'=>'Reset Password',
  'css'=>"assets/css/forgot_pass.css"
  ])
@section('content')
  <main>

    {{-- izin komen dulu ya bang bntr wkwk --}}

    {{-- <div class="heading position-relative">
      @if(session()->has('status'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>    
      @endif
    </div> --}}
    
    <div class="main__card">
      <div class="heading">
        <h2 class="sh_1 fw_bold text_primary">Lupa Kata Sandi?</h2>
        <p class="bt_4 fw_regular text_grey">Masukkan alamat email yang terdaftar di akun Career Network dan kami akan mengirimkan email untuk mengatur ulang kata sandi.</p>
      </div>
      <div class="form__group">
        <form action="{{ route('password_email') }}" method="post">
          @csrf
          <label class="bt_3 fw_medium">Alamat Email <span class="text_danger">*</span> </label>
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
          <button type="submit" class="btn">Ubah Kata Sandi</button>
        </form>
      </div>
    </div>
  </main>
@endsection