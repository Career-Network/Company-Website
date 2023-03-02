@extends('layouts.navbar_footer',[
'title'=>'Edu Career',
'css'=> 'assets/css/educareer.css',
'footer'=> true
])
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <div  id="mentor">
        <nav class="mentor " style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb container pt-3">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
          </nav>
        </div>

<div class="row" id="vbox">
    <div class="col-md-7">
        <img src="{{ asset('assets/img/ui.webp') }}" width="600px" class="rounded mx-auto d-block" id="detail">
        <div class="row container mt-2" style="margin-left:40px">
            <div class="col-md-7 ">
                <p>Durasi Belajar</p>
                <p>28 Agu-7 Sep</p>

                <nav id="detail_kelas">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">Tentang Kelas</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                            type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Tentang
                            Mentor</button>

                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card mt-2" style="width: 600px">
                                    <p style="padding:5px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                        donec tristique tincidunt etiam sit massa urna tristique.
                                        Augue donec ut facilisis duis eu aliquam, tortor. Erat diam dignissim fermentum
                                        amet ut ut quis metus quisque.
                                        Leo et cursus amet nulla. Luctus ut massa vulputate risus vel consectetur risus,
                                        vitae, quam. </p>
                                </div>
                                <div class="card mt-2" style="width: 600px">
                                    <h4 style="padding:5px">Syllabus</h4>
                                    <hr>
                                    <p style="padding:5px">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Nunc donec tristique tincidunt etiam sit massa urna tristique.
                                        Augue donec ut facilisis duis eu aliquam, tortor.
                                        Erat diam dignissim fermentum amet ut ut quis metus quisque. Leo et cursus amet
                                        nulla.
                                        Luctus ut massa vulputate risus vel consectetur risus, vitae, quam.</p>
                                </div>
                                <div class="card mt-2" style="width: 600px">
                                    <h4>Jadwal Kelas</h4>
                                    <hr>
                                    <div class="row justify-content-center text-center">
                                        <div class="col-md-4">
                                            <img src="https://img.icons8.com/ios/50/null/calendar--v1.png" />
                                            <p>28 Agustus - 7 September 2022</p>

                                        </div>
                                        <div class="col-md-4">
                                            <img src="https://img.icons8.com/ios/50/null/calendar--v1.png" />
                                            <p>Setiap hari Jum’at, 19.00 - 21.00 WIB</p>

                                        </div>
                                        <div class="col-md-4">
                                            <img src="https://img.icons8.com/ios/50/null/calendar--v1.png" />
                                            <p>Dilakukan secara online via Google Meet</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-2" style="width: 600px">
                                    <h4>Testimoni</h4>
                                    <hr>

                                    <div class="slideshow-container">

                                        <div class="mySlides">
                                            <img src="{{ asset('assets/img/mentor/ikon.webp') }}" id="ikon">
                                            <h5>Saiful Arifin</h5>
                                            <p>College Student</p>
                                            <br>
                                            <q>I love you the more in that I believe you had liked me for my own sake
                                                and for nothing else</q>
                                            <p class="author">- John Keats</p>
                                        </div>

                                        <div class="mySlides">
                                            <img src="{{ asset('assets/img/mentor/ikon.webp') }}" id="ikon">
                                            <h5>Saiful Arifin</h5>
                                            <p>College Student</p>
                                            <br>
                                            <q>But man is not made for defeat. A man can be destroyed but not
                                                defeated.</q>
                                            <p class="author">- Ernest Hemingway</p>
                                        </div>

                                        <div class="mySlides">
                                            <img src="{{ asset('assets/img/mentor/ikon.webp') }}" id="ikon">
                                            <h5>Saiful Arifin</h5>
                                            <p>College Student</p>
                                            <br>
                                            <q>I have not failed. I've just found 10,000 ways that won't work.</q>
                                            <p class="author">- Thomas A. Edison</p>
                                        </div>

                                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                                        <a class="next" onclick="plusSlides(1)">❯</a>

                                    </div>






                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                        tabindex="0">
                        <div class="card mt-3" style="width: 800px;padding:5px">
                            <div class="row" style="padding:10px;">
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/img/mentor/hilman.webp') }}" width="200px" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h2>Hilman Singgih Wicaksana</h2>
                                    <p>Trainer muda yang memiliki pengalaman luas dibidang UI/UX Designer </p>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p style="font-family: 'Poppins';
                                font-style: normal;
                                font-weight: 500;
                                font-size: 20px;
                                line-height: 140%;
                                color: #DD4211;">Perkerjaan Saat Ini:</p>
                                    <li style="font-weight: 400;
                                font-size: 16px;
                                line-height: 180%; padding-left:10px">Associate UI/UX Designer Trainer</li>
                                    <p style="
                                font-family: 'Poppins';
                                font-style: normal;
                                font-weight: 500;
                                font-size: 20px;
                                line-height: 140%;
                                color: #DD4211;
                                ">Social Link:</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64"
                                        viewBox="0,0,256,256" style="fill:#000000;">
                                        <g fill="#ff5722" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <g transform="scale(3.55556,3.55556)">
                                                <path
                                                    d="M46.603,14c10.57,0 11.397,0.827 11.397,11.397v21.277c0,10.504 -0.822,11.326 -11.326,11.326h-21.348c-10.504,0 -11.326,-0.822 -11.326,-11.326v-21.348c0,-10.504 0.822,-11.326 11.326,-11.326zM30.202,44.705v-13.389h-4.161v13.389zM28.122,29.401c1.337,0 2.425,-1.088 2.425,-2.426c0,-1.337 -1.088,-2.425 -2.425,-2.425c-1.34,0 -2.426,1.086 -2.426,2.425c0,1.339 1.084,2.426 2.426,2.426zM45.812,44.705v-7.343c0,-3.605 -0.779,-6.378 -4.992,-6.378c-2.024,0 -3.381,1.11 -3.937,2.162h-0.056v-1.829h-3.992v13.389h4.158v-6.624c0,-1.746 0.333,-3.437 2.498,-3.437c2.134,0 2.162,1.997 2.162,3.55v6.511h4.159z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>


                                </div>
                                <div class="col-md-6">
                                    <p style="font-family: 'Poppins';
                                font-style: normal;
                                font-weight: 500;
                                font-size: 20px;
                                line-height: 140%;
                                color: #DD4211;">Bidang Keahlian:</p>
                                    <li>UI/UX</li>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="col-md-5">
        <div class="card">
            <div class="card-body" id="price">
                <p>Kelas Pelatihan</p>
                <h3>UI/UX Design - Mastery</h3>
                <p>Rp 299.000</p>
                <h2>Rp 125.000</h2>

                <button type="button" class="btn btn-primary">Daftar Sekarang</button>
                <p>Metode Pembelajaran</p>
                <li>Live Class Via Zoom</li>
                <li>Gabung Grup Diskusi</li>
                <li>Tanya Mentor</li>
                <li>Penilaian dan Sertifikat</li>

            </div>
        </div>
    </div>
</div>
<br>


<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }

</script>


@endsection
