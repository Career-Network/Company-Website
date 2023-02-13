@extends('layouts.navbar_footer',[
  'title'=>'Blog',
  'css'=> 'assets/css/lp.css',
  'footer'=> true
  ])

@section('content')
<main>
    <section id="hero" >
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="hero_img">
                    <img src="{{ asset('assets/img/landing-page/slicing.webp') }}" class="img-fluid" alt="hero">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="hero_text">
                    <h2 class="h_1 text_white fw_bold hero_title">
                        Cek Berita Terbaru <br> Disini !
                    </h2>
                    <img src="{{ asset('assets/img/landing-page/line-white.png') }}" alt="">
                    <p class="bt_2 text_white hero_parag">
                                Nikmati Cerita,Hiburan,Informasi serta Promo, <br>
                                menarik dari blog kami. Ciptakan masa depan <br>
                                bersama Career Network!x
                    </p>
                </div>
            </div>
        </div>

        <img src="{{ asset('assets/img/landing-page/o.png') }}" class="hero_ornament" alt="">
    </section>
    <section style="background-color: white">
        <div class="row container pt-5 pb-5">
            <div class="col-sm p-3">
                <div class="card p-2 shadow">
                    <img src="{{ asset('assets/img/landing-page/s-1.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Perbedaan Bekerja di Startup dan Corporate</h5>
                      <p class="card-text">Networkers sudah tidak asing lagi dengan istilah Startup dan Corporate. Ditambah, saat ini sedang hits...</p>
                      <p class="name">Falih Rahmat</p>
                      <p class="date">21 Mei 2022</p>
                    </div>
                  </div>
            </div>
            <div class="col-sm p-3">
                <div class="card shadow">
                    <img src="{{ asset('assets/img/landing-page/s-2.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Berbagai Profesi Dunia Data dan Analitik</h5>
                      <p class="card-text">Networkers sudah tidak asing lagi dengan istilah Startup dan Corporate. Ditambah, saat ini sedang hits...</p>
                      <p class="name">Toni Sembiring</p>
                      <p class="date">23 Mei 2022</p>
                    </div>
                  </div>
            </div>
            <div class="col-sm p-3">
                <div class="card shadow">
                    <img src="{{ asset('assets/img/landing-page/s-3.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Career Network telah luncurkan Website baru</h5>
                      <p class="card-text">TNetworkers sudah tidak asing lagi dengan istilah Startup dan Corporate. Ditambah, saat ini sedang hits...</p>
                      <p class="name">Falih Rahmat</p>
                      <p class="date">17 Mei 2022</p>
                    </div>
                  </div>
            </div>
        </div>

    </section>

</main>
@endsection
