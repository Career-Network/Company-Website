@extends('layouts.navbar_footer',[
'title'=>'Edu Career',
'css'=> 'assets/css/educareer.css',
'footer'=> true
])
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>

    <section class="edu container">
        <div class="row align-items-center container ">
            <div class="col-md-6 justify-content-center">
                <img src="assets/img/g7.png" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2 class="h_2 fw_bold text_white" id="h2">Belajar hal baru dengan biaya terjangkau dan berkualitas</h2>
                <p class="bt_2 text_white mt-4" id="p">EduCareer hadir sebagai Platform pelatihan dengan mentor berpengalaman
                </p>
            </div>

        </div>
    </section>

    <div class="container">
        <h2 id="kursus">Semua Kursus</h2>
        <div class="row  pb-5">
            <div class="col pt-2" id="card">
                    <div class="card container" id="kartu">
                        <img src="{{ asset('assets/img/kelas-educareer/HR.webp') }}" class="card-img" id="kartu-image">
                        <div class="card-body">
                            <p id="judul"> Human Resources</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A facilisi tincidunt quam turpis quis et pulvinar.</p>
                            <a href="#" class="detail">Lihat Detail &#8594; </a>
                        </div>

                    </div>
                </div>
            <div class="col pt-2">
                <div class="card container" id="kartu">
                    <img src="{{ asset('assets/img/kelas-educareer/UI_UX.webp') }}" class="card-img" id="kartu-image">
                    <div class="card-body">
                        <p id="judul"> Graphic Design</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A facilisi tincidunt quam turpis quis et pulvinar.</p>
                            <a href="#" class="detail">Lihat Detail &#8594; </a>
                    </div>
                </div>

            </div>
            <div class="col pt-2">
                <div class="card container" id="kartu">
                    <img src="{{ asset('assets/img/kelas-educareer/GD.webp') }}" class="card-img" id="kartu-image" >
                    <div class="card-body">
                        <p id="judul">UI / UX Designer</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A facilisi tincidunt quam turpis quis et pulvinar.</p>
                        <a href="#" class="detail">Lihat Detail &#8594; </a>
                    </div>
                </div>
            </div>



            <div class="col pt-2" id="card">
                <div class="card container" id="kartu">
                    <img src="{{ asset('assets/img/kelas-educareer/HR.webp') }}" class="card-img" id="kartu-image">
                    <div class="card-body">
                        <p id="judul"> Human Resources</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A facilisi tincidunt quam turpis quis et pulvinar.</p>
                        <a href="#" class="detail">Lihat Detail &#8594; </a>
                    </div>

                </div>
            </div>
        <div class="col pt-2">
            <div class="card container" id="kartu">
                <img src="{{ asset('assets/img/kelas-educareer/UI_UX.webp') }}" class="card-img" id="kartu-image">
                <div class="card-body">
                    <p id="judul"> Graphic Design</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A facilisi tincidunt quam turpis quis et pulvinar.</p>
                        <a href="#" class="detail">Lihat Detail &#8594; </a>
                </div>
            </div>

        </div>
        <div class="col pt-2">
            <div class="card container" id="kartu">
                <img src="{{ asset('assets/img/kelas-educareer/GD.webp') }}" class="card-img" id="kartu-image" >
                <div class="card-body">
                    <p id="judul">UI / UX Designer</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A facilisi tincidunt quam turpis quis et pulvinar.</p>
                    <a href="#" class="detail">Lihat Detail &#8594; </a>
                </div>
            </div>
        </div>

        </div>

        </div>
        </div>
      </div>
    </div>












</body>






@endsection
