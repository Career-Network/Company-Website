@extends('layouts.navbar_footer',[
  'title'=>'Slicing Blog    ',
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
                    <img src="{{ asset('assets/img/landing-page/line-white.png') }}" id="white">
                    <p class="bt_2 text_white hero_parag" style="font-family: 'Poppins';
                    font-style: normal;
                    font-weight: 400;
                    font-size: 20px;
                    line-height: 30px;">
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
                <div class="card shadow rounded">
                    <img src="{{ asset('assets/img/landing-page/s-1.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body" style="width: 280px; height: 215px;">
                      <h5 class="card-title" id="judul">Perbedaan Bekerja di Startup dan Corporate</h5>
                      <p class="card-text" id="des">Networkers sudah tidak asing lagi dengan istilah Startup dan Corporate. Ditambah, saat ini sedang hits...</p>
                      <p class="name">Falih Rahmat</p>
                      <p class="date">21 Mei 2022</p>
                    </div>
                  </div>
            </div>
            <div class="col-sm p-3">
                <div class="card shadow">
                    <img src="{{ asset('assets/img/landing-page/s-2.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body" style="width: 280px; height: 215px;">

                      <h5 class="card-title" id="judul">Berbagai Profesi Dunia Data dan Analitik</h5>
                      <p class="card-text" id="des">Networkers sudah tidak asing lagi dengan istilah Startup dan Corporate. Ditambah, saat ini sedang hits...</p>
                      <p class="name">Toni Sembiring</p>
                      <p class="date">23 Mei 2022</p>
                    </div>
                  </div>
            </div>
            <div class="col-sm p-3">
                <div class="card shadow">
                    <img src="{{ asset('assets/img/landing-page/s-3.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body" style="width: 280px; height: 215px;">
                      <h5 class="card-title" id="judul">Career Network telah luncurkan Website baru</h5>
                      <p class="card-text" id="des">TNetworkers sudah tidak asing lagi dengan istilah Startup dan Corporate. Ditambah, saat ini sedang hits...</p>
                      <p class="name">Falih Rahmat</p>
                      <p class="date">17 Mei 2022</p>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row container  pb-5">
            <div class="col-sm p-3">
                <div class="card shadow rounded">
                    <img src="{{ asset('assets/img/landing-page/s-1.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body" style="width: 280px; height: 215px;">
                      <h5 class="card-title" id="judul">Perbedaan Bekerja di Startup dan Corporate</h5>
                      <p class="card-text" id="des">Networkers sudah tidak asing lagi dengan istilah Startup dan Corporate. Ditambah, saat ini sedang hits...</p>
                      <p class="name">Falih Rahmat</p>
                      <p class="date">21 Mei 2022</p>
                    </div>
                  </div>
            </div>
            <div class="col-sm p-3">
                <div class="card shadow">
                    <img src="{{ asset('assets/img/landing-page/s-2.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body" style="width: 280px; height: 215px;">

                      <h5 class="card-title" id="judul">Berbagai Profesi Dunia Data dan Analitik</h5>
                      <p class="card-text" id="des">Networkers sudah tidak asing lagi dengan istilah Startup dan Corporate. Ditambah, saat ini sedang hits...</p>
                      <p class="name">Toni Sembiring</p>
                      <p class="date">23 Mei 2022</p>
                    </div>
                  </div>
            </div>
            <div class="col-sm p-3">
                <div class="card shadow">
                    <img src="{{ asset('assets/img/landing-page/s-3.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body" style="width: 280px; height: 215px;">
                      <h5 class="card-title" id="judul">Career Network telah luncurkan Website baru</h5>
                      <p class="card-text" id="des">TNetworkers sudah tidak asing lagi dengan istilah Startup dan Corporate. Ditambah, saat ini sedang hits...</p>
                      <p class="name">Falih Rahmat</p>
                      <p class="date">17 Mei 2022</p>
                    </div>
                  </div>
            </div>
        </div>
        <div class="pagination justify-content-center pb-3">
            <a href="#"><</a>
            <a href="#">1</a>
            <a class="active" href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">></a>
          </div>
    </section>


</main>
@endsection
