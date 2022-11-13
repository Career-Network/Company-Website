@extends('layouts.navbar_footer',[
  'title'=>'Edu Career',
  'css'=> 'assets/css/detail-class.css'
  ])
@section('content')
<main>
    <section class="banner-class">
        <div class="content-banner-class">
            <div class="text-banner-class">
                <div class="title-banner-class">
                    <h2>digital marketing</h2>
                </div>
                <div class="desc-banner-class">
                    <h3>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel exercitationem dolorum quidem ex perspiciatis doloremque temporibus nihil eligendi sint ea, provident quas fugit esse, mollitia odit dolor fuga? Quas, id.
                    </h3>
                </div>
                <div class="btn-banner-class">
                    <a href=""><button id="btn-ds">daftar sekarang</button></a>
                    <a href=""><button id="btn-dw"><i class="fa-solid fa-file-arrow-down"></i> unduh silabus</button></a>
                </div>
            </div>
            <div class="image-banner-class">
                <img src="{{ asset('assets/img/banner_class.png') }}" alt="gambar">
            </div>
        </div>
    </section>
    <section class="content-class-blok">
        <div class="content-class">
            <div class="nav-class">
                <a href=""><h4 class="active">tentang kelas</h4></a><hr>
                <a href=""><h4>metode belajar</h4></a><hr>
                <a href=""><h4>jadwal kelas</h4></a><hr>
                <a href=""><h4>testimoni kelas</h4></a>
            </div>
            <div class="list-content-class">
                <div id="tentang-kelas">
                    <div class="cc-title">
                        <h4>tentang kelas</h4>
                    </div>
                    <div class="cc-desc">
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. In, eligendi aspernatur officia incidunt explicabo cumque asperiores. Quia assumenda voluptates maxime, eveniet totam quidem? Rerum itaque corporis ratione, consectetur odio aliquam?
                        </p>
                    </div>
                </div>
                <div id="metode-belajar">
                    <div class="cc-title">
                        <h4>metode belajar</h4>
                    </div>
                    <div class="cc-desc">
                        <ul>
                            <li>
                                <div class="mb-card">
                                    <div class="mb-top">
                                        <div class="mb-icon">
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </div>
                                        <div class="mb-title">
                                            <h4>gabung grup diskusi</h4>
                                        </div>
                                    </div>
                                    <div class="mb-desc">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate alias eius dignissimos porro laborum accusantium ea velit suscipit est nemo, doloribus molestias. Laboriosam quaerat sunt repellat sit adipisci, amet inventore!
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="mb-card">
                                    <div class="mb-top">
                                        <div class="mb-icon">
                                            <i class="fa-solid fa-video"></i>
                                        </div>
                                        <div class="mb-title">
                                            <h4>live class via zoom</h4>
                                        </div>
                                    </div>
                                    <div class="mb-desc">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate alias eius dignissimos porro laborum accusantium ea velit suscipit est nemo, doloribus molestias. Laboriosam quaerat sunt repellat sit adipisci, amet inventore!
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="mb-card">
                                    <div class="mb-top">
                                        <div class="mb-icon">
                                            <i class="fa-solid fa-file-lines"></i>
                                        </div>
                                        <div class="mb-title">
                                            <h4>penilaian <span class="low">dan</span> sertifikat</h4>
                                        </div>
                                    </div>
                                    <div class="mb-desc">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate alias eius dignissimos porro laborum accusantium ea velit suscipit est nemo, doloribus molestias. Laboriosam quaerat sunt repellat sit adipisci, amet inventore!
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="mb-card">
                                    <div class="mb-top">
                                        <div class="mb-icon">
                                            <i class="fa-solid fa-comment-dots"></i>
                                        </div>
                                        <div class="mb-title">
                                            <h4>tanya mentor</h4>
                                        </div>
                                    </div>
                                    <div class="mb-desc">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate alias eius dignissimos porro laborum accusantium ea velit suscipit est nemo, doloribus molestias. Laboriosam quaerat sunt repellat sit adipisci, amet inventore!
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="jadwal-kelas">
                    <div class="cc-title">
                        <h4>jadwal kelas</h4>
                    </div>
                    <div class="cc-desc">
                        <ul>
                            <li>
                                <div class="jk-card">
                                    <div class="mb-icon"></div>
                                    <div class="content-jk">
                                        <p>
                                            28 Agustus - 7 September 2022
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="jk-card">
                                    <div class="mb-icon"></div>
                                    <div class="content-jk">
                                        <p>
                                            Setiap hari Jum’at, 19.00 - 21.00 WIB
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="jk-card">
                                    <div class="mb-icon"></div>
                                    <div class="content-jk">
                                        <p>
                                            Dilakukan secara online via Google Meet
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="testimoni">
                    <div class="cc-title">
                        <h4>testimoni</h4>
                    </div>
                    <div class="tm-content">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tm-card">
                                        <div class="tm-card-img">
                                            <img src="{{ asset('assets/img/testimoni.png') }}" alt="testimonial-img">
                                        </div>
                                        <div class="tm-username">
                                            <h4>saiful arifin</h4>
                                        </div>
                                        <div class="cc-desc">
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto soluta quo voluptates, explicabo eos tenetur nostrum quod similique dicta harum qui in laborum, labore autem suscipit animi inventore ipsum beatae?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tm-card">
                                        <div class="tm-card-img">
                                            <img src="{{ asset('assets/img/testimoni.png') }}" alt="testimonial-img">
                                        </div>
                                        <div class="tm-username">
                                            <h4>ferry irawan</h4>
                                        </div>
                                        <div class="cc-desc">
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto soluta quo voluptates, explicabo eos tenetur nostrum quod similique dicta harum qui in laborum, labore autem suscipit animi inventore ipsum beatae?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tm-card">
                                        <div class="tm-card-img">
                                            <img src="{{ asset('assets/img/testimoni.png') }}" alt="testimonial-img">
                                        </div>
                                        <div class="tm-username">
                                            <h4>leny susanto</h4>
                                        </div>
                                        <div class="cc-desc">
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto soluta quo voluptates, explicabo eos tenetur nostrum quod similique dicta harum qui in laborum, labore autem suscipit animi inventore ipsum beatae?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tm-card">
                                        <div class="tm-card-img">
                                            <img src="{{ asset('assets/img/testimoni.png') }}" alt="testimonial-img">
                                        </div>
                                        <div class="tm-username">
                                            <h4>tini anjayani</h4>
                                        </div>
                                        <div class="cc-desc">
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto soluta quo voluptates, explicabo eos tenetur nostrum quod similique dicta harum qui in laborum, labore autem suscipit animi inventore ipsum beatae?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tm-card">
                                        <div class="tm-card-img">
                                            <img src="{{ asset('assets/img/testimoni.png') }}" alt="testimonial-img">
                                        </div>
                                        <div class="tm-username">
                                            <h4>budi sutyono</h4>
                                        </div>
                                        <div class="cc-desc">
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto soluta quo voluptates, explicabo eos tenetur nostrum quod similique dicta harum qui in laborum, labore autem suscipit animi inventore ipsum beatae?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next nav-tm-btn"></div>
                            <div class="swiper-button-prev nav-tm-btn"></div>
                        </div>
                    </div>
                </div>
                <div class="bottom-banner-class">
                    <div class="text-banner-bottom">
                        <h3>
                            Tertarik belajar seputar Digital Marketing dan berkembang bersama kami?
                        </h3>
                    </div>
                    <div class="btn-daftar">
                        <a href="">
                            <button>daftar sekarang</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/swipper-testimoni.js') }}"></script>
</main>
@endsection