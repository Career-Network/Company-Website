@extends('layouts.navbar_footer',[
'title'=>'Edu Career',
'css'=> 'assets/css/educareer.css',
'footer'=> true
])
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body class="hm-gradient">

    <main>

        <!--MDB -->
        <div class="" >


            <!-- Grid row -->
            {{-- <div class="row">

                <!-- Grid column -->
                <div class="col-md-12">

                    <div class="card p-3"style=" background: #FFEBE5;
                    backdrop-filter: blur(5px);" >
                        <div class="card-block" >
                            <div class="bc-icons-2"style="color: #FF5722;" >

                                <ol class="breadcrumb container indigo lighten-4">
                                    <li class="breadcrumb-item" ><a class="black-text" href="#" style="color: #FF5722;text-decoration:none;">Home</a><i class="fa fa-caret-right mx-2" aria-hidden="true"></i></li>
                                    <li class="breadcrumb-item" style="color: #FF5722;"><a class="black-text" href="#" style="color: #FF5722;text-decoration:none;">Library</a><i class="fa fa-caret-right mx-2" aria-hidden="true"></i></li>
                                    <li class="breadcrumb-item active" style="color: #FF5722;">Data</li>
                                </ol>


                            </div>

                        </div>
                    </div>

                </div> --}}
                <!-- Grid column -->

            </div>


        </div>
        <!--MDB -->

    </main>

</body>
    <div class="row container" id="card_kelas_detail">
        <div class="col-md-7 container" id="card_image">
            {{-- <img src="{{ asset('assets/img/ui.webp') }}" width="500px"  class="rounded mx-auto d-block" id="ui"> --}}
            <div class="row " id="card_ux">

                <div class="col-md-6" id="top_card">UI/UX Design Mastery</div>
                <div class="col-md-6" >
                    <div class="top_card text-center justify-content-center"><p id="tp2">Career Network</p></div>

                </div>

            </div>



        </div>
        <div class="col-md-5">
            <div class="text_card">
            <p id="text_card">UI / UX Designer</p>
            <p id="des_text_card">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A facilisi tincidunt quam turpis quis et pulvinar.</p>
        </div>
    </div>


    </div>
    <hr>
        <div class="text-center">
            <h2 style="color: #FF5722; font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 48px;
            line-height: 72px;" id="mentor_judul">Pilih Mentormu Disini!</h2>
            <p style="font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 30px;
            color: #111111;"
            id="mentor_go">Silakan pilih mentor yang sesuai dengan kriteriamu.</p>
        </div>
    <div class="container">
        <h3 style="font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 111%;
        display: flex;
        align-items: center;
        color: #111111;" id="mentor_kursus">Mentor untuk kursus ini</h3></div>
        <div class="row container" id="mentor_row">
            <div class="col-md-4 " id="mentor_card1">
                <br>
                <p id="mentor_status">Aviable</p>
                <p  id="mentor_name">Talita Zulmi</p>
                <p id="mentor_posisi">CEO</p>
                <p id="mentor_job">Human Resources</p>
            </div>
            <div class="col-md-4" id="mentor_card2">
                <br>
                <p id="mentor_status">Aviable</p>
                <p  id="mentor_name">Talita Zulmi</p>
                <p id="mentor_posisi">CEO</p>
                <p id="mentor_job">Human Resources</p>
            </div>
            <div class="col-md-4" id="mentor_card3">
                <br>
                <p id="mentor_status">Aviable</p>
                <p  id="mentor_name">Talita Zulmi</p>
                <p id="mentor_posisi">CEO</p>
                <p id="mentor_job">Human Resources</p>
            </div>
        </div>
        <br>

<body>

    @endsection

