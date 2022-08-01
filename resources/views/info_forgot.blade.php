@extends('layouts.navbar_footer',[
  'title'=>'Reset Password',
  'css'=>"assets/css/info_pass.css"
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
        <h2 class="sh_1 fw_bold text_primary">Terkirim</h2>
        <p class="bt_4 fw_regular text_grey">Kami telah mengirimkan link ke email kamu yang dapat digunakan untuk mengatur ulang kata sandi. Jika email tidak ditemukan jangan lupa untuk mencarinya di folder spam dan sampah.</p>
      </div>
    </div>
  </main>
@endsection