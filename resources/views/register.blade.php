@extends('layouts.navbar_footer',[
  'title'=>'Login',
  'css'=>'assets/css/register.css'
  ])
@section('content')

  <main>
    <div class="heading">
      <p class="title">STAY CONNECTED</p>
      <p class="sub__title">Semua akan menjadi mudah jika terus terhubung</p>
    </div>
    <!-- bener ga bang? -->
    <div class="container" style="max-width: 912px !important;">
      <form action="{{ route('register') }}" method="post">
        @csrf
          <div class="row form__group">
              <div class="input__group col-lg-12 col-md-12 col-sm-12 order-first position-relative">
                  <span class="label">Nama Lengkap</span>
                  <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Anda" autofocus required value="{{ old('name') }}">
                  @error('name')
                  <div class="invalid-tooltip">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="input__group col-sm-6 order-sm-1 order-2 position-relative">
                  <span class="label">Email Address</span>
                  <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email Anda" required value="{{ old('email') }}">
                  @error('email')
                  <div class="invalid-tooltip">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="input__group col-sm-6 order-sm-2 order-1 position-relative">
                  <span class="label">No Handphone</span>
                  <input name="number" type="number"  class="form-control @error('number') is-invalid @enderror" placeholder="Masukkan No Handphone Anda" required value="{{ old('number') }}">
                  @error('number')
                  <div class="invalid-tooltip">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="input__group col-sm-6 order-3 position-relative">
                  <span class="label">Password</span>
                  <input name="password" type="password"  class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password Anda" required >
                  @error('password')
                  <div class="invalid-tooltip">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="input__group col-sm-6 order-4 position-relative">
                <span class="label">Konfirmasi Password</span>
                <input name="confirm_password" type="password" class="form-control @error('confirm_password') is-invalid @enderror" placeholder="Masukkan Password Anda" required >
                @error('confirm_password')
                  <div class="invalid-tooltip">
                    {{ $message }}
                  </div>
                @enderror
            </div>
          </div>
          <div class="button__group">
            <button type="submit" class="btn__masuk">Daftar</button> <br />
              <a href="{{ route('login') }}" class="btn btn__daftar">
                Kembali Login
              </a>
          </div>
      </form>
    </div>
  </main>
@endsection