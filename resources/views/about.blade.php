@extends('layouts.navbar_footer',[
  'title'=>'About',
  'css'=> 'assets/css/about.css',
  'footer'=> true
  ])

{{-- @extends('layouts.mainlayout') --}}
{{-- @section('title', 'About') --}}

@section('content')
<main>
  <section class="hero-section"> 
      <div class="container">
        <div class="banner">
          <img src="{{ asset('assets/img/Illustration.png') }}" alt="">
        </div>
        <div class="desc">
          <h4>tentang kami</h4>
          <div class="underLn-1"></div>
          <p class="text">
            Career Network merupakan perusahaan yang menyediakan layanan kelas pelatihan online (Online Training Class) dengan dibimbing oleh para mentor yang expert dibidangnya.
            Career Network akan meningkatkan skill kamu dengan kelas pelatihan yang dibutuhkan oleh dunia industri dan menambah portofolio dengan real project secara langsung yang akan membantu kamu di dalam mendapatkan pekerjaan.
          </p> 
          </div>
      </div>
  </section>
  <section class="service">
    <div class="container identity"> 
        <div class="row">         
          <div class="col-md-7">
            <h4>Semua berawal di 2021</h4>
            <p class="text">
              Melihat pertumbuhan angkatan kerja yang semakin meningkat setiap tahunnya, namun tidak sebanding dengan penyerapan ke dunia kerja. 
              Kami melakukan riset terkait permasalahan yang membuat para lulusan dari instansi pendidikan yang banyak  mengalami kegagalan masuk ke dunia kerja, 
              bahkan ketika ditahap seleksi awal.
            </p> 
            <p class="text">
              Permasalahan yang yang kami temukan salah satunya karena tidak memiliki sertifikasi kompetensi ataupun portofolio project yang sangat berguna menambah 
              point plus bagi kandidat dimata perusahaan. 
            </p>
            <p class="text">
              Maka dari kondisi tersebut, berdirilah Career Network. Kami hadir untuk membantu anak muda di indonesia mendapatkan pekerjaan dengan meningkatkan skill 
              mereka agar mampu bersaing melalui portofolio project dan memiliki sertifikat dari kelas pelatihan yang kami sediakan.  
            </p>
          </div>
          <div class="col-md-5">
            <img src="{{ asset('assets/img/Illustration-2.png') }}" alt="">
          </div> 
        </div>
      </div>
      
      <div class="container">
        <div class="decor-2"></div>
        <div class="decor-1"></div>
      </div> 
    <div class="container visiMisi">
      <div class="row">         
        <div class="col-md-6">
          <h4>Visi</h4>
          <p class="text">Menjadi Platform Pemesanan Pelatihan Berbasis Online No 1 di Indonesia yang mempertemukan para ahli di berbagai bidang secara langsung dengan mentee.</p> 
        </div>
        <div class="col-md-6">
          <h4>Misi</h4>
          <ol>
            <li>Memberikan Pelatihan Online berkualitas dengan konsep 1 on 1 dan berkelompok kepada Mentees.</li>
            <li>Mengutamakan pelayanan yang ramah dan cepat kepada konsumen.</li>
            <li>Memiliki sistem yang terintegrasi pada website dan fitur Career Network.</li>
            <li>Memiliki forum komunitas yang menghimpun semua pakar di berbagai bidang ke dalam Career Network Group.</li>
          </ol>
        </div> 
      </div>
    </div>
    <div class="container organisasi"> 
      <div class="title">
        <h4>kenali para pemimpin career network</h4>
        <div class="underLn-2"></div>
      </div>
      <div class="row">         
          <div class="col-md-3">
            <div class="card">
              <div class="photocard">
                <img src="{{ asset('assets/img/chief/zaki.png') }}" alt="">
              </div>
              <h4>Zaki Udin Fauzi</h4>
              <p class="text">Chief Executive Officer</p> 
            </div>
          </div>          
          <div class="col-md-3">
            <div class="card">
              <div class="photocard">
                <img src="{{ asset('assets/img/chief/Rizky Al.png') }}" alt="">
              </div>
              <h4>Rizky Alfiansyah</h4>
              <p class="text">Vice CEO</p> 
            </div>
          </div>          
          <div class="col-md-3">
            <div class="card">
              <div class="photocard">
                <img src="{{ asset('assets/img/chief/eggar.png') }}" alt="">
              </div>
              <h4>Widhiyanto Enggartyasto</h4>
              <p class="text">CTO</p> 
            </div>
          </div>          
          <div class="col-md-3">
            <div class="card">
              <div class="photocard">
                <img src="{{ asset('assets/img/chief/Adam Virgiansa.png') }}" alt="">
              </div>
              <h4>Adam Virgiansa</h4>
              <p class="text">COO</p> 
            </div>
          </div> 
          <div class="col-md-3">
            <div class="card">
              <div class="photocard">
                <img src="{{ asset('assets/img/chief/Jeremy Sisto Manurung.png') }}" alt="">
              </div>
              <h4>Jeremy Sinto Manurung</h4>
              <p class="text">CCO</p> 
            </div>
          </div> 
          <div class="col-md-3">
            <div class="card">
              <div class="photocard">
                <img class="default" src="" alt="">
              </div>
              <h4>Basri Wijaya Pakpahan</h4>
              <p class="text">CEO OFFICE</p> 
            </div>
          </div> 
          <div class="col-md-3">
            <div class="card">
              <div class="photocard">
                <img src="{{ asset('assets/img/chief/Hasyim Aldi Kalla.png') }}" alt="">
              </div>
              <h4>Hasyim Aldi Kalla</h4>
              <p class="text">CMO</p> 
            </div>
          </div> 
          <div class="col-md-3">
            <div class="card">
              <div class="photocard">
                <img class="default" src="" alt="">
              </div>
              <h4>Mokhaman Wildan M</h4>
              <p class="text">Penasihat</p> 
            </div>
          </div> 
        </div>
      </div>
    </div>
    <div class="container location">
      <div class="row">
        <div class="col-md-6">
          <h4>Tertarik menjadi partner kami ? Yuk terhubung !</h4>
          <p class="text">Kami bekerja dengan partnership terpercaya untuk berkolaborasi bersama agar tercipta tujuan yang sama. Dengan berpartnership berarti terikat dengan peningkatan dampak, inovasi, atau pengaruh.</p> 
        </div>
        <div class="col-md-6 box-locate">
          <h4>Alamat</h4>
          <p class="text">
            Diponegoro Space, Gedung Serbaguna, BCA. Lt. 2, 50275, Kota Semarang, Jawa Tengah, Indonesia.
          </p>
          <h4>Hubungi Kami</h4>
          <p class="text">
            careernetwork.id@gmail.com <br/>
            <a href="https://api.whatsapp.com/send?phone=6289513190531">+62 895 - 1319 - 0531</a>
          </p>
      </div>
    </div>
  </section>
  @endsection
  
  {{-- <div class="container mt-5">
    <h1>Ini adalah halaman About</h1>
  </div> --}}
