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
          <p class="text">Career Network merupakan startup yang menyediakan pelatihan online bagi mahasiswa/i secara 1 on 1 dan kelompok degan para mentor yang ahli di berbagai bidang ilmu. Selain itu, Career Network juga memiliki layanan pemesanan jasa Freelance untuk membantu kebutuhan masyarakat.</p> 
          </div>
      </div>
  </section>
  <section class="service">
    <div class="container identity"> 
        <div class="row">         
          <div class="col-md-7">
            <h4>Semua berawal di 2021</h4>
            <p class="text">Berawal dengan tujuan untuk membantu pemerintah dalam meningkatkan sumber daya manusia yang unggul. Serta memecahkan masalah kesenjangan keterampilan yang disebabkan oleh ketidaksetaraan dalam akses pendidikan. Maka dari itu, Zaki Udin Fauzi bersama rekan dari berbagai universitas yang satu tujuan untuk bersinergi membangun sarana pemberdayaan talenta bangsa yang berkualitas. Dengan ini, mencetak generasi bangsa yang berkompeten di bidangnya. Didirikan di Semarang, Jawa Tengah pada 17 Januari 2022 sebagai awal dari Career Network. Dengan memiliki tim dari beragam latar belakang menjadikan Career Network terus berkembang dengan inovasi baru. Dengan harapan dapat berkontribusi dalam mewujudkan Indonesia Emas 2045.</p> 
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
          <p class="text">Jl. Gondang Raya, No 27, Kelurahan Bulusan, Kecamatan Tembalang,
            Kota Semarang.</p>
          <h4>Hubungi Kami</h4>
          <p class="text">careernetwork.id@gmail.com
            +62 8820 - 0622 - 7165</p>
          </div>
      </div>
    </div>
  </section>
  @endsection
  
  {{-- <div class="container mt-5">
    <h1>Ini adalah halaman About</h1>
  </div> --}}
