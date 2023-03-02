@extends('layouts.navbar_footer',[
'title'=>'Edu Career',
'css'=> 'assets/css/educareer.css',
'footer'=> true
])
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <div  id="mentor">
    <nav class="mentor " style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb container pt-3">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Library</li>
        </ol>
      </nav>
    </div>
    <div class="row container">
        <div class="col-md-6 container">
            <img src="{{ asset('assets/img/ui.webp') }}" width="500px"  class="rounded mx-auto d-block" id="ui">
            <h4 id="judul_course">UI/UX Design Mastery</h4>
            <p id="company">Career Network</p>
        </div>
        <div class="col-md-6" id="desk">
            <h4 id="course_name">UI/UX Designer</h4>
            <p id="des_course">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A facilisi tincidunt quam turpis quis et pulvinar.</p>
        </div>


    </div>
    <hr>
        <div class="text-center">
            <h2 style="color: #FF5722; font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 48px;
            line-height: 72px;" >Pilih Mentormu Disini!</h2>
            <p style="font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 30px;
            color: #111111;">Silakan pilih mentor yang sesuai dengan kriteriamu.</p>
        </div>
    <div class="container">
        <h3 style="font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 111%;
        display: flex;
        align-items: center;
        color: #111111;">Mentor untuk kursus ini</h3>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('assets/img/mentor/talita.webp') }}" alt="" id="gambar">
                <p style="position:absolute;top:700px;left:90px;background: linear-gradient(98.25deg, rgba(255, 255, 255, 0.5) 19.65%, rgba(255, 255, 255, 0.2) 92.72%);
                backdrop-filter: blur(10px);width: 97px;
height: 21px;text-align:center;
                border-radius: 10px;"> Available</p>
                <div class="data text-center">
                <p style="font-weight: 600;
                font-size: 22px;
                line-height: 33px;">Talita Zulmi</p>
                <p style="font-weight: 400;
                font-size: 16px;
                line-height: 30px;">CEO Bicara HR</p>
                <p style="font-weight: 600;
                font-size: 16px;
                line-height: 30px">Human Resources</p></div>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/img/mentor/hilman.webp') }}" alt=""  id="gambar">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/img/mentor/arya.webp') }}" alt=""  id="gambar">
            </div>
        </div>
        <br>
    </div>
<body>

    @endsection

