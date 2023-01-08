@extends('layouts.navbar_footer',[
  'title'=>'Edu Career',
  'css'=> 'assets/css/pilih_mentor.css',
  'jsScript'=> 'assets/js/loadmore.js',
  'footer'=> true
  ])
@section('content')
<main>
    <section class="hero-section"> 

        <div class="container">
                <div class="section">
                    <h4>Pilih Mentormu Disini!</h4>
                    <p class="text">Silahkan kamu pilih mentor yang sesuai dengan kriteriamu.</p>
                    
                </div>

        </div>

    </section>
    <section class="service">
    <div class="container"> 
          <div class="row">

            <div class="col-md-4">
              <div class="gambar">
                <img src="{{ asset('assets/img/mentor/Ahmad Wijayanto (Kelas UI_UX Designer).png') }}" alt="mentor" class="img-mentor">
              </div>
            
              <div class="keteragan">
                <p class="nama">Muhammad Nur Azizi</p>
                <p class="bidang-pekerjaan">Frontend Web di Tokopedia</p>
                <p class="desc" id="card-1">Lorem Ipsum is simply dummy text of the printing and tipesetting Industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley.</p>                            
              </div>
              <div class="tombol">
                <a href="#" class="btn btn-success">
                  Gabung Kelas
                </a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="gambar">
                <img src="{{ asset('assets/img/mentor/Avenita (Kelas TOEFL).png') }}" alt="mentor" class="img-mentor">
              </div>
            
              <div class="keteragan">
                <p class="nama">Muhammad Nur Azizi</p>
                <p class="bidang-pekerjaan">Frontend Web di Tokopedia</p>
                <p class="desc" id="card-2">Lorem Ipsum is simply dummy text of the printing and tipesetting Industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley Load More.</p>                            
              </div>
              <div class="tombol">
                <a href="#" class="btn btn-success">
                  Gabung Kelas
                </a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="gambar">
                <img src="{{ asset('assets/img/mentor/Fahmi Hidayat (Kelas Digital Marketing).png') }}" alt="mentor" class="img-mentor">
              </div>
            
              <div class="keteragan">
                <p class="nama">Muhammad Nur Azizi</p>
                <p class="bidang-pekerjaan">Frontend Web di Tokopedia</p>
                <p class="desc" id="card-3">Lorem Ipsum is simply dummy text of the printing and tipesetting Industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley Load More.</p>                            
              </div>
              <div class="tombol">
                <a href="#" class="btn btn-success">
                  Gabung Kelas
                </a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="gambar">
                <img src="{{ asset('assets/img/mentor/Franes Pradasuara, S.Pt., M.M.M., CPHCM., CSRP (Kelas Human Resource).png') }}" alt="mentor" class="img-mentor">
              </div>
            
              <div class="keteragan">
                <p class="nama">Muhammad Nur Azizi</p>
                <p class="bidang-pekerjaan">Frontend Web di Tokopedia</p>
                <p class="desc" id="card-4">Lorem Ipsum is simply dummy text of the printing and tipesetting Industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley Load More.</p>                            
              </div>
              <div class="tombol">
                <a href="#" class="btn btn-success">
                  Gabung Kelas
                </a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="gambar">
                <img src="{{ asset('assets/img/mentor/Hilman Singgih Wicaksana (Kelas UI_UX Designer).png') }}" alt="mentor" class="img-mentor">
              </div>
            
              <div class="keteragan">
                <p class="nama">Muhammad Nur Azizi</p>
                <p class="bidang-pekerjaan">Frontend Web di Tokopedia</p>
                <p class="desc" id="card-5">Lorem Ipsum is simply dummy text of the printing and tipesetting Industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley Load More.</p>                            
              </div>
              <div class="tombol">
                <a href="#" class="btn btn-success">
                  Gabung Kelas
                </a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="gambar">
                <img src="{{ asset('assets/img/mentor/Jeremy Sisto Manurung (Kelas Graphic Designer)_.png') }}" alt="mentor" class="img-mentor">
              </div>
            
              <div class="keteragan">
                <p class="nama">Muhammad Nur Azizi</p>
                <p class="bidang-pekerjaan">Frontend Web di Tokopedia</p>
                <p class="desc" id="card-6">Lorem Ipsum is simply dummy text of the printing and tipesetting Industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley Load More.</p>                            
              </div>
              <div class="tombol">
                <a href="#" class="btn btn-success">
                  Gabung Kelas
                </a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="gambar">
                <img src="{{ asset('assets/img/mentor/Mada Haidar Achmad (Kelas Graphic Designer With Adobe Illustrator).png') }}" alt="mentor" class="img-mentor">
              </div>
            
              <div class="keteragan">
                <p class="nama">Muhammad Nur Azizi</p>
                <p class="bidang-pekerjaan">Frontend Web di Tokopedia</p>
                <p class="desc" id="card-7">Lorem Ipsum is simply dummy text of the printing and tipesetting Industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley Load More.</p>                            
              </div>
              <div class="tombol">
                <a href="#" class="btn btn-success">
                  Gabung Kelas
                </a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="gambar">
                <img src="{{ asset('assets/img/mentor/Marsya Jelita (Kelas UI-UX Designer).png') }}" alt="mentor" class="img-mentor">
              </div>
            
              <div class="keteragan">
                <p class="nama">Muhammad Nur Azizi</p>
                <p class="bidang-pekerjaan">Frontend Web di Tokopedia</p>
                <p class="desc" id="card-8">Lorem Ipsum is simply dummy text of the printing and tipesetting Industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley Load More.</p>                            
              </div>
              <div class="tombol">
                <a href="#" class="btn btn-success">
                  Gabung Kelas
                </a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="gambar">
                <img src="{{ asset('assets/img/mentor/Meita Astaningrum (Kelas Digital Marketing).png') }}" alt="mentor" class="img-mentor">
              </div>
            
              <div class="keteragan">
                <p class="nama">Muhammad Nur Azizi</p>
                <p class="bidang-pekerjaan">Frontend Web di Tokopedia</p>
                <p class="desc" id="card-9">Lorem Ipsum is simply dummy text of the printing and tipesetting Industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley Load More.</p>                            
              </div>
              <div class="tombol">
                <a href="#" class="btn btn-success">
                  Gabung Kelas
                </a>
              </div>
            </div> 

            <div class="col-md-4">
              <div class="gambar">
                <img src="{{ asset('assets/img/mentor/Muhamad Fernandy (Kelas UI_UX Designer).png') }}" alt="mentor" class="img-mentor">
              </div>
            
              <div class="keteragan">
                <p class="nama">Muhammad Nur Azizi</p>
                <p class="bidang-pekerjaan">Frontend Web di Tokopedia</p>
                <p class="desc" id="card-10">Lorem Ipsum is simply dummy text of the printing and tipesetting Industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley Load More.</p>                            
              </div>
              <div class="tombol">
                <a href="#" class="btn btn-success">
                  Gabung Kelas
                </a>
              </div>
            </div> 
            <div class="col-md-4">
              <div class="gambar">
                <img src="{{ asset('assets/img/mentor/Nur Hidayah (Kelas English Speaking).png') }}" alt="mentor" class="img-mentor">
              </div>
            
              <div class="keteragan">
                <p class="nama">Muhammad Nur Azizi</p>
                <p class="bidang-pekerjaan">Frontend Web di Tokopedia</p>
                <p class="desc" id="card-11">Lorem Ipsum is simply dummy text of the printing and tipesetting Industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley Load More.</p>                            
              </div>
              <div class="tombol">
                <a href="#" class="btn btn-success">
                  Gabung Kelas
                </a>
              </div>
            </div> 
            <div class="col-md-4">
              <div class="gambar">
                <img src="{{ asset('assets/img/mentor/Rezki Ramadhan (Kelas Coding With PHP Laravel).png') }}" alt="mentor" class="img-mentor">
              </div>
            
              <div class="keteragan">
                <p class="nama">Muhammad Nur Azizi</p>
                <p class="bidang-pekerjaan">Frontend Web di Tokopedia</p>
                <p class="desc" id="card-12">Lorem Ipsum is simply dummy text of the printing and tipesetting Industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley Load More.</p>                            
              </div>
              <div class="tombol">
                <a href="#" class="btn btn-success">
                  Gabung Kelas
                </a>
              </div>
            </div> 

            <div class="col-md-4">
              <div class="gambar">
                <img src="{{ asset('assets/img/mentor/Sundari Fitri (Kelas English Speaking).png') }}" alt="mentor" class="img-mentor">
              </div>
            
              <div class="keteragan">
                <p class="nama">Muhammad Nur Azizi</p>
                <p class="bidang-pekerjaan">Frontend Web di Tokopedia</p>
                <p class="desc" id="card-13">Lorem Ipsum is simply dummy text of the printing and tipesetting Industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley Load More.</p>                            
              </div>
              <div class="tombol">
                <a href="#" class="btn btn-success">
                  Gabung Kelas
                </a>
              </div>
            </div> 
           
         
          </div>
         
          
    </div>
   </section> 

</main>
@endsection