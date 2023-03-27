@extends('layouts.navbar_footer',[
  'title'=>'Blog',
  'css'=> 'assets/css/lp.css',
  'footer'=> true
  ])

@section('content')
<main>
    <section id="hero" >
        <div class="row align-items-center flex-row-reverse container-hero">

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

             <div class="col-sm-6">
                <div class="hero_img">
                    <img src="{{ asset('assets/img/landing-page/slicing.webp') }}" class="img-fluid" alt="hero">
                </div>
            </div>
        </div>

        <img src="{{ asset('assets/img/landing-page/o.png') }}" class="hero_ornament" alt="">
    </section>
    <section class="container-cards-wrapper" style="background-color: white">
        <div class="row container container-cards">
            @foreach ($blogs as $blog)
                <div class="col-md-4 p-3">
                    <div class="card shadow rounded">
                        <img src='@if(substr($blog->image, 0, 10) == "thumbnails") {{ asset("storage/$blog->image") }} @else {{ $blog->image }} @endif' class="card-img-top" alt="...">
                        <div class="card-body" style="width: 280px; height: 215px;">
                          <a class="card-title" href="/blog/{{ preg_replace('/[\s_]+/', '-', trim(preg_replace('/[^a-z0-9-_\s]+/', '' ,strtolower($blog->title)), '-')) }}" id="judul">{{ substr($blog->title, 0, 35) }} ...</a>
                          <p class="card-text" id="des">{!! strip_tags(substr($blog->body, 0, 110)) !!}  ...</p>
                          <p class="name">{{ $blog->author }}</p>
                          <p class="date">{{ date('d F Y', strtotime($blog->update_date)) }}</p>
                        </div>
                      </div>
                </div>
            @endforeach
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