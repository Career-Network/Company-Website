@extends('layouts.navbar_footer',[
  'title'=>'Edu Career',
  'css'=> 'assets/css/list_class.css',
  'footer'=> true
  ])
@section('content')

  <main>

    <section id="hero" class="py_40">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="h_2 fw_bold text_white">Belajar hal baru dengan biaya terjangkau dan berkualitas</h2>
                    <p class="bt_2 text_white mt-4">EduCareer hadir sebagai Paltform pelatihan dengan mentor berpengalaman</p>
                </div>
                <div class="col-md-6">
                    <img src="assets/img/g7.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="list-class" class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card bg-transparent">
                        <h3 class="h_3 fw_semibold py_60">Daftar Pelatihan</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card" >
                        <img src="{{ asset('assets/img/kelas-educareer/Human Resources.webp') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="bt_1 fw_semibold">Human Resources</h5>
                            <p class="bt_4 text_dark_grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A facilisi tincidunt quam turpis quis et pulvinar.</p>
                            <p class="bt_2 fw_bold text_danger">Rp  199.000 <span class="discount">Rp  299.000</span></p>
                            <div class="d-grid">
                                <a href="#" class="btn_primary text_white text-center">Segera Hadir!</a>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card" >
                        <img src="{{ asset('assets/img/kelas-educareer/Graphic-Designer.webp') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="bt_1 fw_semibold">Graphic Design</h5>
                            <p class="bt_4 text_dark_grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A facilisi tincidunt quam turpis quis et pulvinar.</p>
                            <p class="bt_2 fw_bold text_danger">Rp  199.000 <span class="discount">Rp  299.000</span></p>
                            <div class="d-grid">
                                <a href="#" class="btn_primary text_white text-center">Segera Hadir!</a>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card" >
                        <img src="{{ asset('assets/img/kelas-educareer/Excel.webp') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="bt_1 fw_semibold">Microsoft Office Excel</h5>
                            <p class="bt_4 text_dark_grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A facilisi tincidunt quam turpis quis et pulvinar.</p>
                            <p class="bt_2 fw_bold text_danger">Rp  199.000 <span class="discount">Rp  299.000</span></p>
                            <div class="d-grid">
                                <a href="#" class="btn_primary text_white text-center">Segera Hadir!</a>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card" >
                        <img src="{{ asset('assets/img/kelas-educareer/Digital-Marketing.webp') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="bt_1 fw_semibold">Digital Marketing</h5>
                            <p class="bt_4 text_dark_grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A facilisi tincidunt quam turpis quis et pulvinar.</p>
                            <p class="bt_2 fw_bold text_danger">Rp  199.000 <span class="discount">Rp  299.000</span></p>
                            <div class="d-grid">
                                <a href="#" class="btn_primary text_white text-center">Segera Hadir!</a>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card" >
                        <img src="{{ asset('assets/img/kelas-educareer/Finance.webp') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="bt_1 fw_semibold">Finance</h5>
                            <p class="bt_4 text_dark_grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A facilisi tincidunt quam turpis quis et pulvinar.</p>
                            <p class="bt_2 fw_bold text_danger">Rp  199.000 <span class="discount">Rp  299.000</span></p>
                            <div class="d-grid">
                                <a href="#" class="btn_primary text_white text-center">Segera Hadir!</a>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card" >
                        <img src="{{ asset('assets/img/kelas-educareer/Export_Import.webp') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="bt_1 fw_semibold">Export and Import</h5>
                            <p class="bt_4 text_dark_grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A facilisi tincidunt quam turpis quis et pulvinar.</p>
                            <p class="bt_2 fw_bold text_danger">Rp  199.000 <span class="discount">Rp  299.000</span></p>
                            <div class="d-grid">
                                <a href="#" class="btn_primary text_white text-center">Segera Hadir!</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection