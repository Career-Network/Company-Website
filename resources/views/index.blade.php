@extends('layouts.navbar_footer',[
  'title'=>'Career Network',
  'css'=>'assets/css/lp.css'
  ])
@section('content')
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<main>
    <section id="hero">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="hero_text">
                    <h2 class="h_1 text_white fw_bold hero_title">
                        Ayo Tumbuh <br> Bersama Kami !
                    </h2>
                    <img src="assets/img/landing-page/so.png" alt="">
                    <p class="bt_2 text_white hero_parag">
                        Hadirkan peluang signifikan untuk meningkatkan pertumbuhan pribadi Anda, seperti memberikan Pelatihan Karir dan menghubungkan Freelancer dengan pembuat proyek - Semuanya sesuai dengan kebutuhan Anda.
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="hero_img">
                    <img src="assets/img/landing-page/rocket.png" class="img-fluid" alt="hero">
                </div>
            </div>
        </div>

        <img src="assets/img/landing-page/o.png" class="hero_ornament" alt="">
    </section>

    <section id="about">
        <div class="container">
            <div class="row justify-content-center py_40 align-items-center">
                <div class="col-sm-6">
                    <img src="assets/img/landing-page/abt.png" class="img-fluid" alt="about-us">
                </div>
                <div class="col-sm-6">
                    <div class="about_right">
                        <h2 class="h_3 fw_semibold mb_12">
                            Buat tujuan karirmu dan tumbuh bersama kami!
                        </h2>
                        <p class="bt_3">Dibentuk karena kesenjangan skill, kurangnya daya saing serta ketidakmerataan informasi yang dimiliki mahasiswa.  Platform penyedia pelatihan online secara 1 on 1 dan kelompok dengan para mentor yang ahli di bidangnya.  Serta layanan pemesanan Freelance untuk membantu kebutuhan masyarakat, terutama UMKM di Indonesia.</p>
                        <button class="btn_secondary">Tentang Kami</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="carousel">
        <div class="main-carousel">
            <div class="cell"><img src="assets/img/landing-page/c-1.png" alt=""></div>
            <div class="cell"><img src="assets/img/landing-page/c-2.png" alt=""></div>
            <div class="cell"><img src="assets/img/landing-page/c-3.png" alt=""></div>
        </div>
    </section>


    <section id="strategi">

    </section>

</main>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script type="text/javascript">
  $('.main-carousel').flickity({
    // options
    cellAlign: 'left',
    warpAround: true,
    freeScroll: true
  });
  </script>
@endsection
