@extends('layouts.navbar_footer',[
  'title'=>'Career Network',
  'css'=>'assets/css/lp.css'
  ])
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://code.jquery.com/jquery-3.6.1.js""></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<main>
    <section id="hero">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="hero_text">
                    <h2 class="h_1 text_white fw_bold hero_title">
                        Ayo Tumbuh <br> Bersama Kami !
                    </h2>
                    <img src="{{ asset('assets/img/landing-page/line-white.png') }}" alt="">
                    <p class="bt_2 text_white hero_parag">
                        Hadirkan peluang signifikan untuk meningkatkan pertumbuhan pribadi Anda, seperti memberikan Pelatihan Karir dan menghubungkan Freelancer dengan pembuat proyek - Semuanya sesuai dengan kebutuhan Anda.
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="hero_img">
                    <img src="{{ asset('assets/img/landing-page/rocket.png') }}" class="img-fluid" alt="hero">
                </div>
            </div>
        </div>

        <img src="{{ asset('assets/img/landing-page/o.png') }}" class="hero_ornament" alt="">
    </section>

    <section id="about">
        <div class="container">
            <div class="row justify-content-center py_40 align-items-center">
                <div class="col-sm-6">
                    <img src="{{ asset('assets/img/landing-page/abt.png') }}" class="img-fluid" alt="about-us">
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
        <div class="main-carousel" id="c-carousel">
            <div class="cell"><img src="{{ asset('assets/img/landing-page/c-1.png') }}" alt=""></div>
            <div class="cell"><img src="{{ asset('assets/img/landing-page/c-2.png') }}" alt=""></div>
            <div class="cell"><img src="{{ asset('assets/img/landing-page/c-3.png') }}" alt=""></div>
        </div>
        <div class="main-carousel" id="m-carousel">
            <div class="cell"><img src="{{ asset('assets/img/landing-page/m-1.png') }}" alt=""></div>
            <div class="cell"><img src="{{ asset('assets/img/landing-page/m-2.png') }}" alt=""></div>
            <div class="cell"><img src="{{ asset('assets/img/landing-page/m-3.png') }}" alt=""></div>
        </div>
    </section>

    <section id="service" class="pb-5">
        <div class="text-center">
            <div class="">
                <h2>Layanan Kami</h2>
                <img class="garis" src="{{ asset('assets/img/landing-page/line-primary.png') }}" alt="">
            </div>
            <div class="carddy">
                <div class="head-card">
                    <img src="{{ asset('assets/img/landing-page/card-1.png') }}" alt="">
                </div>
                <div class="body-card">
                    <h4>Career Network <br>Edu Career</h4>
                    <p>
                        EduCareer hadir sebagai Paltform pelatihan dengan mentor berpengalaman
                    </p>
                    <a href="{{ route('educareer') }}"><button><p>Layanan</p></button></a>
                </div>
            </div>
            <div class="carddy">
                <div class="head-card">
                    <img src="{{ asset('assets/img/landing-page/card-2.png') }}" alt="">
                </div>
                <div class="body-card">
                    <h4>Career Network <br>Sonic</h4>
                    <p>
                        Penyedia jasa Freelancer bagi masyarakat dengan berpegang teguh kepada  Excellent Service.
                    </p>
                    <button><p>Segera Hadir!</p></button>
                </div>
            </div>
        </div>
    </section>

    <section id="berita">
        <div class="row">
            <div class="col-sm-5 px-5 center">
                <h2 class="h_3 fw_semibold mt-5">Blog Terkini</h2>
                <p class="bt_3">Nikmati Cerita, Hiburan, Informasi serta Promo menarik dari  blog Career Network. </p>
                <button><p>Lihat Lebih Banyak</p></button>
            </div>
            <div class="col-sm-7">
                <div class="slider owl-carousel">
                    <div class="carddy-1">
                        <div class="img">
                            <img src="{{ asset('assets/img/landing-page/s-1.png') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Perbedaan Bekerja di Startup dan Corporate</div>
                            <div class="sub-title">Networkers sudah tidak asing lagi dengan istilah Startup dan Corporate. Ditambah, saat ini sedang hits...</div>
                            <div class="name">Falih Rahmat</div>
                            <div class="date">21 Mei 2022</div>
                        </div>
                    </div>
                    <div class="carddy-1">
                        <div class="img">
                            <img src="{{ asset('assets/img/landing-page/s-2.png') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Berbagai Profesi Dunia Data dan Analitik</div>
                            <div class="sub-title">Networkers sudah tidak asing lagi dengan istilah Startup dan Corporate. Ditambah, saat ini sedang hits...</div>
                            <div class="name">Toni Sembiring</div>
                            <div class="date">23 Mei 2022</div>
                        </div>
                    </div>
                    <div class="carddy-1">
                        <div class="img">
                            <img src="{{ asset('assets/img/landing-page/s-3.png') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Career Network telah luncurkan Website...</div>
                            <div class="sub-title">Networkers sudah tidak asing lagi dengan istilah Startup dan Corporate. Ditambah, saat ini sedang hits...</div>
                            <div class="name">Falih Rahmat</div>
                            <div class="date">17 Mei 2022</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- footer --}}
    <section id="mf">
        <div class="row row-eq-height align-items-center justify-content-center">
            <div class="col-sm-5 bg_dark p-5">
                <img src="{{ asset('assets/img/landing-page/logo-footer.png') }}" alt="">
                <p class="bt_3 text_white mt-4">Lorem ipsum dolor sit amet, consectur adipisci elit. Rhoncus sodales pellene tellus eu. Non aenean diam tellus.</p>
                <label class="bt_3 fw_semibold text_white">Ikuti Kami &nbsp;
                    <a href="" class="social-media"><i class="fa-brands fa-twitter" target="blank"></i></a>
                    <a href="https://www.linkedin.com/company/career-network-id/" class="social-media" target="blank"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/careernetwork.id/" class="social-media" target="blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="" class="social-media"><i class="fa-brands fa-facebook" target="blank"></i></a>
                </label>
            </div>
            <div class="col-sm-7 bg_grey mf-right">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4 col-6">
                        <ul>
                            <label class="bt_3 fw_semibold">Sumber</label>
                            <li>Perusahaan</li>
                            <li>Blog</li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-6">
                        <ul>
                            <label class="bt_3 fw_semibold">Layanan</label>
                            <li>EduCareer</li>
                            <li>Sonic</li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-6">
                        <ul>
                            <label class="bt_3 fw_semibold">Bantuan</label>
                            <li>Syarat dan Ketentuan</li>
                            <li>Kebijakan Privasi</li>
                            <li>Kontak</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script type="text/javascript">
    $('.slider').owlCarousel({
        autoWidth:true,
    });
</script>
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
