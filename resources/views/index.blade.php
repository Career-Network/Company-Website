@extends('layouts.nav_landing',[
  'title'=>'Career Network',
  'css'=>'assets/css/lp.css',
  'footer'=> true
  ])
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<main>
    <section id="hero" >
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="hero_text">
                    <h2 class="h_1 text_white fw_bold hero_title">
                        Ayo Tumbuh <br> Bersama Kami !
                    </h2>
                    <img src="{{ asset('assets/img/landing-page/line-white.png') }}" alt="">
                    <p class="bt_2 text_white hero_parag">
                        Hadirkan peluang signifikan untuk meningkatkan pertumbuhan pribadi Anda, seperti memberikan Pelatihan Karir dengan pembuat proyek - Semuanya sesuai dengan kebutuhan Anda.
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
    <section style="background-color: #ffff">
        <div class="row">
            <div class="col-sm-3 mt-5 text-center " id="col1"><img src="{{ asset('assets/img/landing-page/asp.webp')}}" alt="" id="brand1"></div>
            <div class="col-sm-3 mt-5 text-center" id="col1"><img src="{{ asset('assets/img/landing-page/nic.webp')}}" alt="" id="brand2"></div>
            <div class="col-sm-3 mt-5 text-center" id="col1"><img src="{{ asset('assets/img/landing-page/nic.webp')}}" alt="" id="brand3"></div>
            <div class="col-sm-3 mt-5 text-center" id="col1"><img src="{{ asset('assets/img/landing-page/ohs.webp')}}" alt="" id="brand4"></div>
        </div>
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
                        <p class="bt_3">Dibentuk karena kesenjangan skill, kurangnya daya saing serta ketidakmerataan informasi yang dimiliki mahasiswa.  Platform penyedia pelatihan online secara 1 on 1 dan kelompok dengan para mentor yang ahli di bidangnya. </p>
                        <button class="btn_secondary" onclick="window.location='{{ route('about') }}'">Tentang Kami</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- main branch -->
        <!-- Another branch -->
     <section id="caraousel" class="">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="border-radius:50%;width:18px;height:20px;"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" style="border-radius:50%;width:18px;height:20px"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" style="border-radius:50%;width:18px;height:20px"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="ball-strategi"><p>Strategi Kami</p></div>
                <img src="{{asset('assets/img/landing-page/B-1.webp')}}" class="d-block w-100" height="900px" alt="...">
                  <div class="carousel-caption">
              <h3 class="carousel-title" class="text-start" id="text" >Strategi kami untuk perusahaan</h3>
              <p class="carousel-text text-start" style="font-family: 'Poppins';font-weight: 400;font-size: 16px;line-height: 30px;">Kami berkomitmen untuk membangun masa depan pengguna dengan pendekatan </p>
                <p class="carousel-text text-start" style="font-family: 'Poppins';font-weight: 400;font-size: 16px;line-height: 30px;">yang terencana dengan tepat, mengoptimalkan fleksibilitas target perusahaan, dan </p>
                <p class="carousel-text text-start" style="font-family: 'Poppins';font-weight: 400;font-size: 16px;line-height: 30px;">menciptakan nilai berkelanjutan untuk semua  yang kami lakukan.  </p>
            </div>
          </div>
          <div class="carousel-item ">
        <div class="ball-strategi"><p>Strategi Kami</p></div>
            <img src="{{asset('assets/img/landing-page/B-2.webp')}}" class="d-block w-100" height="900px" alt="...">
            <div class="carousel-caption">
              <h3 class="carousel-title" class="text-start">Strategi kami untuk Klien</h3>
              <p class="carousel-text text-start" style="font-family: 'Poppins';font-weight: 400;font-size: 16px;line-height: 30px;">Kami berkomitmen untuk memahami setiap nuansa kebutuhan mereka, menggunakan
                semua energi pribadi dan  kreatifitas kami untuk membuat kesepakatan terbaik dan
                melakukan sepenuh daya kami untuk membantu mencapai tujuan mereka.</p>
            </div>
          </div>
          <div class="carousel-item">
               <div class="ball-strategi"><p>Strategi Kami</p></div>
            <img src="{{asset('assets/img/landing-page/B-3.webp')}}" class="d-block w-100"height="900px" alt="...">
            <div class="carousel-caption mt-change">

              <h3 class="text-start carousel-title mt-change-title">Strategi kami untuk Tim</h3>
              <p class="text-start carousel-text mt-change-text "style="font-family: 'Poppins';font-weight: 400;font-size: 16px;line-height: 30px;">Kami berkomitmen untuk mendorong sebuah pendekatan kolaboratif untuk memecahkan <br> masalah klien, untuk menumbuhkan lingkungan kerja yang inklusif, sehat dan memberikan <br> kesempatan yang memungkinkan orang untuk belajar,mencapai,dan mempertahakan <br> kesemimbangan kerja/kehidupan yang memuaskan.</p>
            </div>
          </div>
        </div>
        <button  class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true" style=" border-style: solid;border-color: white;border-width: 1px;border-radius:30px;width:40px;height:40px;"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button  class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true" style=" border-style: solid;border-color: white;border-width: 1px;border-radius:30px;width:40px;height:40px;"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
     </section>

    <section id="service" class="pb-5 ">
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
                    <h4>Career Network <br>FLAP</h4>
                    <p>
                        Program internship yang berfokus pada work-based learning.
                    </p>
                    <button><p>Segera Hadir!</p></button>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #ffff">
    <h2 id="question">Apa kata mereka?</h2>
        <p id="kren">Sangat senang belajar di career network!</p>
        <div class="row">
            <div class="col-md-3 d-none d-sm-block" id="img_side">
                <div class="d-flex justify-content-start" id="d-flex"><img src="{{ asset('assets/img/landing-page/test2.webp') }}" id="testimonial_image"></div><br>
                <div class="d-flex justify-content-end" id="d-flex"><img src="{{ asset('assets/img/landing-page/test3.webp') }}" id="testimonial_image"></div><br>
                <div class="d-flex justify-content-center" id="d-flex"><img src="{{ asset('assets/img/landing-page/test4.webp') }}"id="testimonial_image" ></div>
            </div>
            <div class="col-md-6" id="img_center">
                <div class="slideran">
                    <div class="sli active ">
                     <p class="text-center" id="test_des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                     <img src="{{ asset('assets/img/landing-page/tes1.webp') }}" class="test_image"/>
                     <h4 class="test_name">Edward Panjaitan</h4>
                     <p id="test_status">Student</p>
                    </div>
                    <div class="sli">

                      <p class="text-center"  id="test_des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <img src="{{ asset('assets/img/landing-page/tes1.webp') }}" class="test_image" />
                      <h4 class="test_name">Edward Panjaitan</h4>
                      <p id="test_status">Student</p>
                    </div>
                    <div class="sli">

                      <p class="text-center"  id="test_des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <img src="{{ asset('assets/img/landing-page/tes1.webp') }}"  class="test_image"/>
                      <h4 class="test_name">Edward Panjaitan</h4>
                      <p id="test_status">Student</p>
                    </div>
                  </div>

                  <div class="dots">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                  </div>
            </div>
            <div class="col-md-3 d-none d-sm-block" id="img_side">
                <div class="d-flex justify-content-end" id="d-flex"><img src="{{ asset('assets/img/landing-page/test5.webp') }}" id="testimonial_image" ></div><br>
              <div class="d-flex justify-content-start" id="d-flex"><img src="{{ asset('assets/img/landing-page/test6.webp') }}" id="testimonial_image" ></div><br>
                <div class="d-flex justify-content-center" id="d-flex"><img src="{{ asset('assets/img/landing-page/test7.webp') }}" id="testimonial_image"></div>
            </div>
        </div>

    </section>

    <section id="berita" >
        <div class="row">
            <div class="col-sm-5 px-5 center" >
                <h2 class="h_3 fw_semibold mt-5">Blog Terkini</h2>
                <p class="bt_3">Nikmati Cerita, Hiburan, Informasi serta Promo menarik dari  blog Career Network. </p>
                <button><a href="{{ route('blog') }}" class="link">Lihat Lebih Banyak</a></button>
            </div>
            <div class="col-sm-7">
                <div class="slider owl-carousel">
                    <div class="carddy-1">
                        <div class="img">
                            <img src="{{ asset('assets/img/landing-page/s-1.webp') }}" alt="">
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
                            <img src="{{ asset('assets/img/landing-page/s-2.webp') }}" alt="">
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
                            <img src="{{ asset('assets/img/landing-page/s-3.webp') }}" alt="">
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

<script>
    const slides = document.querySelectorAll('.sli');
const dots = document.querySelectorAll('.dot');
let currentSlide = 0;

// show first slide and dot
slides[currentSlide].classList.add('active');
dots[currentSlide].classList.add('active');

// add event listeners to dots
dots.forEach((dot, index) => {
dot.addEventListener('click', () => {
// remove active class from current slide and dot
slides[currentSlide].classList.remove('active');
dots[currentSlide].classList.remove('active');
// update current slide
currentSlide = index;
// add active class to new slide and dot
slides[currentSlide].classList.add('active');
dots[currentSlide].classList.add('active');
});
});

// set up automatic slide change
setInterval(() => {
// remove active class from current slide and dot
slides[currentSlide].classList.remove('active');
dots[currentSlide].classList.remove('active');
// update current slide
currentSlide++;
if (currentSlide >= slides.length) {
currentSlide = 0;
}
// add active class to new slide and dot
slides[currentSlide].classList.add('active');
dots[currentSlide].classList.add('active');
}, 3000); // change slide every 5 seconds

  </script>

@endsection
