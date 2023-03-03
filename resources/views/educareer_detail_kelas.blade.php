@extends('layouts.navbar_footer',[
'title'=>'Edu Career',
'css'=> 'assets/css/educareer.css',
'footer'=> true
])
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body class="hm-gradient">

    <main>

        <!--MDB -->
        <div class="">


            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-12">

                    <div class="card p-3" style=" background: #FFEBE5;
                        backdrop-filter: blur(5px);">
                        <div class="card-block">
                            <div class="bc-icons-2" style="color: #FF5722;">

                                <ol class="breadcrumb container indigo lighten-4">
                                    <li class="breadcrumb-item"><a class="black-text" href="#"
                                            style="color: #FF5722;text-decoration:none;">Home</a><i
                                            class="fa fa-caret-right mx-2" aria-hidden="true"></i></li>
                                    <li class="breadcrumb-item" style="color: #FF5722;"><a class="black-text" href="#"
                                            style="color: #FF5722;text-decoration:none;">Library</a><i
                                            class="fa fa-caret-right mx-2" aria-hidden="true"></i></li>
                                    <li class="breadcrumb-item active" style="color: #FF5722;">Data</li>
                                </ol>


                            </div>

                        </div>
                    </div>

                </div>
                <!-- Grid column -->

            </div>


        </div>
        <!--MDB -->

    </main>


</body>
<div class="row mt-5" id="vbox">
    <div class="col-md-8">
        <img src="{{ asset('assets/img/ui.webp') }}" class=" mx-auto d-block" id="detail">
        <h4 id="judul_kelas">UI/UX Design Mastery</h4>
        <p id="company_kelas">Career Network</p>
        <div class="row container mt-2" style="margin-left:40px">
            <div class="col-md-7 ">
                <p style="font-family: 'Poppins';
                font-style: normal;
                font-weight: 500;
                font-size: 15px;
                line-height: 120%;


                color: #B8B8B8;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADEElEQVR4nO2azW7TQBCAzaGUhyg4MzYSolBAQYBEkQKnvoBnAz1wCxeeoZQbtIJbERXPgMpvxTtUSIhW8AaItAminGiLMmhthyRNYq/t9ToVWWmkKD/e+XZ+dnY2ljUe/8FggRwl1lEZPAYZ0ZHVpdizL7KAx2xZx/LRcOCkZ48zOTeZ8AETvGKCrT4Xk+/JzwQusHAqXCtPxEA0gt/hs9xhmEoXWOALFtiMi40B0mSCVa7CTP9z8R4LbHUWIScY9vA8E6ynUH6QtFjAe6460z1zCLifGwzftU8w4RMW+EcTRJfAARMs8Zw7ORwGHmWHuHMaWeBn/QB98omFXeqHgYaMnWwQZF9jgh0DEBxaZ5s9uNKBcWoyHrNBVEtXmWDXHAS25Wc3TDYIYZeYoF4ABIeWabBwneyBLWCzOAjsxExXAkgOQvh0BCDYF8LldBBVmIlMsYTX2XPK5twODg7vM2ogAj9EPthzyqHVzhmDIXyXxhqtmBXalru7//3b9hkm/GYExkuwj4S1k8IKQV1axKhlCFbVq9hEBaBhyxD+kDoquBXeSrFKhi3jVBTcChbTPdyoZRZU4uNN+glMwcBaPAjh14yT5A9DsKVikaaGiToxUytP8Lw7pfEQxrL+UomRPU2rVu/OLiyckxpB9syBSJl3p3qbE7qyGfxWAQk6F3qssu67Vdgt0ZaaCXbiQQi/6HOBATFTxcuGgh3WtIO0YXwIuKHhWS8VLAIPcwExvyE6lRFQlCPFw9l4kDl30i/MilZWDBNoRLVaD8fJ8+IVxmGyogThg1TdS/EHq0Kklbi35fdii1ece4TwdSKIwCrONBPsF6686G4+9Hft1WAIl0fHGpC+ee1nMAEfRwBiI1ODzocRrlNoy5TwO3unIBPEP5igtPhVgCV22/0zbcNsVxFDS2iG6HEzEzFDsKHNnaJLGFjKJTUT7MvslDmwk1+G4ltNFUBLbnacpkmt9Xpa3ramalr4p9GVzFdqOkfQapWHJliUB5/ggkgqKnsAvsjXm/5n8k8FHs4qV7HjYR298RfCF/dch654YwAAAABJRU5ErkJggg=="> &nbsp;Durasi Belajar</p>
                <p style="font-family: 'Poppins';
                font-style: normal;
                font-weight: 500;
                font-size: 19px;
                line-height: 120%;
                color: #000000;
                ">28 Agu-7 Sep</p>

                <nav id="detail_kelas">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true" style="font-size: 16px;
                            line-height: 30px;
                            color: #FF5722;">Tentang Kelas</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                            type="button" role="tab" aria-controls="nav-profile" aria-selected="false" style="font-size: 16px;
                            line-height: 30px;
                            color: #FF5722;">Tentang
                            Mentor</button>

                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card mt-2" style="width: 700px" id="card1">
                                    <p style="padding:5px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                        donec tristique tincidunt etiam sit massa urna tristique.
                                        Augue donec ut facilisis duis eu aliquam, tortor. Erat diam dignissim fermentum
                                        amet ut ut quis metus quisque.
                                        Leo et cursus amet nulla. Luctus ut massa vulputate risus vel consectetur risus,
                                        vitae, quam. </p>
                                </div>
                                <div class="card mt-2" style="width: 700px"  >
                                    <h4 style="padding:10px;font-family: 'Poppins';
                                    font-style: normal;
                                    font-weight: 600;
                                    font-size: 16px;
                                    line-height: 30px;">Syllabus</h4>
                                    <hr>
                                    <p  id="card2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Nunc donec tristique tincidunt etiam sit massa urna tristique.
                                        Augue donec ut facilisis duis eu aliquam, tortor.
                                        Erat diam dignissim fermentum amet ut ut quis metus quisque. Leo et cursus amet
                                        nulla.
                                        Luctus ut massa vulputate risus vel consectetur risus, vitae, quam.</p>
                                </div>
                                <div class="card mt-2" style="width: 700px">
                                    <h4 style="padding:10px;font-family: 'Poppins';
                                    font-style: normal;
                                    font-weight: 600;
                                    font-size: 16px;
                                    line-height: 30px;">Jadwal Kelas</h4>
                                    <hr>
                                    <div class="row justify-content-center text-center" id="card3">
                                        <div class="col-md-4">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA9UlEQVR4nO1a0QqDMAzMr1h/ZnvbXhK/f2P7jRsKilSFbrO0oXeQBxWTXu/aKFQkERj6C7R7wgKm0O4x3kt9v3T+BVPiuciqmDjJv2BOfnRde35/RDCEOzS8N/JGERc6OyQ1/zhW7W9bIgkkqiJiE5nXobSuiNiO9ZojgspCSMTKqwAqYo4UIWoDKrAJuNhXKD2zVCRG6ZmlIjH+aUA5n+Hb8ZCIUBGhteyENVJbSPNEJMM26mr7BYkEKoImrIXKQponIj9aK4clwa9f4/8IaC3jrhWK9wawjwg7O2gty7VGdHUyx0vozqEbWLi6IqOZjkERcg4+gbUo5G5bV54AAAAASUVORK5CYII=">
                                            <p id="date_kelas">28 Agustus - 7 September 2022</p>

                                        </div>
                                        <div class="col-md-4">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADuUlEQVR4nO2aSWsUURCAR3GL3iNC0FT15KJokOglJCTePHgR7HpjDHjzZxhzixGXi6KnCCouGDS4XIwH9Rijh2hckoDgRWNUjAtZICX1ehxnJp3p191vZjqQhoJhlnr1UVXv1auaVGrlWUYPt7WtYQUuE/Qx4Tsm/MYK/zDBBCu8yS50sltXE3sdt66GFXawwqtMMM6Ev7LyhhVe0TYca1obTXkGDzLBe1bIJYWgLxZEKrWKCfoD11EwJjaZK+5KrWaCHla4YAAxyEe3bYgDotc8sGUjEzwOhtFAJ8XGYKUE58wU4hPu3LwpLkRReD0yhDlbWlkGDhkpEk8U5QbvT69n5bQzQTcruMOEozqnCOZYwayXX/Da+0y+47TLbyJ7JrNEmLG7fR0TfAwLwZn0bia4xAq/G3oyT5eGuyg6QsMQfvDdALK7hjEEU30jEzw0yqVgWWDC++ziznCeAXcxCMENEwhJbiY8wwrmLQAUGzbPhKd0mJrAEF7zAxkPhHCdNCt8aR9g0XovWKUdA5i3PqEFMyUhCPaygsmyQ6jcup85g3tKw8BPM5BCiOloRjnN7GJLxFCbZtdpKgHz2y+0JpYOp+ieyNtMonumowH9YWDMb9e65ZvYMXMiNojSBg/7bwBwfTGIFIB5EJ6X8HTcWLcDgmJXb97WPJh978hiEPmCwtsF54SFLdYiyFzunNHlDFw2qryzhx0nBkTpc+NeoOEFEFJ22Dmx7YIoqQDqG81BvNqJEwjCrPC8GYSuYiMUgJUD+SoFroE3nH0WFy0HCLOCVpOw6k48CGGXCcjd5INAvwEIji4DkFfBIJJMyQf5YgACs+EUO82BSu0n+4x9EBdbDHS2VgEErYZWeQQmK57sZREySXbL22+ZQPorfiCWSY4b5IjTngBDOe4G4xWN3viAkykwZTxi0G3MqhuM8cp42xcry7IQ6mKV9cqDBBjOBUI4EArC84qzwxsJJABAicA8Z2BXaBANIw3lxHgDeiJB/L/2wnACIIaKh0LhYaQrLm3LqkHgJ3a3QiyIHIx0xSM3sWN54oc0sa1A5GCkK15Jz5B4whIEd2KtHokdxoZcmFUiZwiG/oWTrK1t6MTa6BAKRrKKBwtLGOgty9ZMMKdn/HmJnWtYiy1hYQogllAgDWXpxVochg7I2RXFlqVBFDw3/aE33cUL0W6WMCW1U1DZwYXRMRQCBJ/pOA1Br+f0+m4OJ7z/lsjCYqj0ALTI6xH9GWGXHseF+KMM63yFISZ8agyy8qSq9/wFVw7sW8QOf70AAAAASUVORK5CYII=">
                                            <p id="date_kelas">Setiap hari Jum’at, 19.00 - 21.00 WIB</p>

                                        </div>
                                        <div class="col-md-4">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACSklEQVR4nO2Yu24TQRSGR6KhgAqUlN5zNuESJATKE0ABFZciM2exAomAjg5RwGNwKShAgo5LiWhRQKBUqQggEKFASHkACm6Rf7RrK/bGs3i9w3rX0fzSkQvP0Zlv5t+5KeXl5eXl5eW1zQRNFyH0DsIbEMYIY6NTd9EdQujSiDufFW4wMPy+BhCAoVXHGRm5nTJtpoq56T6iqaOqBgCbofICaLUDQnd7cr+MHQgWGjth+GlfrqOvP0P4CYSXRgGCc/v2QnjZmutUfJ4nun7ll2WCoDnNMPwxM7d4YXqdKiR8HYZ/lAECHc5CeP2fuUPY6BOEfiYbWLxK2AqePbAHQg962v9xBYEJTkLo+8DcnBCP2tMbNKBndg30chQeav/SnAsINC/A0O9cubmKNKfZ3mGaTEZMT81kQgmtFAFBRFcg3Mqdm69heKa/g8G19GjRc5zev7sflL4WApFkNcw/mzkbthDR4W4H+bh1tAzfSXXG8Iei1kJJIIg/5B673Mpot77FVi/qDWLopr0dfas7SCtlLRMey7DW7Xpby9Cp/o+drkLoVw/Es61Lc/0+9mbG8jvPE5DgBKRx0PZ/DZdffjzUhtjZVyCki1qrnA2xba+1xErxjVKHsyr7iPKwvkcUsYK9SRekG+NxaBRLRDTZBeFXY3qM547dktXF+S4yCKTci9V/DlXZVbcCEOvjg6G18X4OMnQZhu9BN46ozpNl1RDxOe3tsCBpKuHF6iHiCM47gWzCGFqt5BE7rmvCC84QXl5eXl5eXmr76C8QRfIJEP6EnQAAAABJRU5ErkJggg==">
                                            <p id="date_kelas">Dilakukan secara online via Google Meet</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-2" style="width: 700px">
                                    <h4 style="padding:10px;font-family: 'Poppins';
                                    font-style: normal;
                                    font-weight: 600;
                                    font-size: 16px;
                                    line-height: 30px;">Testimoni</h4>
                                    <hr>

                                    <div class="slideshow-container">

                                        <div class="mySlides">
                                            <img src="{{ asset('assets/img/mentor/ikon.webp') }}" id="ikon">
                                            <h5>Saiful Arifin</h5>
                                            <p class="status">College Student</p>
                                            <br>
                                            <q>I love you the more in that I believe you had liked me for my own sake
                                                and for nothing else</q>
                                        </div>

                                        <div class="mySlides">
                                            <img src="{{ asset('assets/img/mentor/ikon.webp') }}" id="ikon">
                                            <h5>Saiful Arifin</h5>
                                            <p>College Student</p>
                                            <br>
                                            <q>But man is not made for defeat. A man can be destroyed but not
                                                defeated.</q>

                                        </div>

                                        <div class="mySlides">
                                            <img src="{{ asset('assets/img/mentor/ikon.webp') }}" id="ikon">
                                            <h5>Saiful Arifin</h5>
                                            <p>College Student</p>
                                            <br>
                                            <q>I have not failed. I've just found 10,000 ways that won't work.</q>

                                        </div>

                                        <a class="prev" onclick="plusSlides(-1)" style="text-decoration: none;margin-left:5px">❮</a>
                                        <a class="next" onclick="plusSlides(1)" style="text-decoration: none;margin-right:5px">❯</a>

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
    <div class="col-md-3">
        <div class="card" id="card_price">
            <div class="card-body" id="price">
                <p style="font-family: 'Poppins';
                font-style: normal;
                font-weight: 400;
                font-size: 19px;
                line-height: 120%">Kelas Pelatihan</p>
                <h3 style="font-family: 'Poppins';
                font-style: normal;
                font-weight: 700;
                font-size: 20px;
                line-height: 120%;
                color: #222222;">UI/UX Design - Mastery</h3>
                <p><strike style="font-size: 19px;
                line-height: 120%;
                color: #767272;">Rp 299.000</strike>&nbsp; <b>9%</b> </p>
                <h2>Rp 125.000</h2>

                <button type="button" class="btn" id="reg">Daftar Sekarang</button>
                <p style="font-weight: 700;
                font-size: 16px;
                line-height: 150%;
                color: #222222">Metode Pembelajaran</p>
                <li><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="20" height="20"
                    viewBox="0,0,256,256"
                    style="fill:#000000;">
                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.33333,5.33333)"><path d="M43,38.833c0,2.302 -1.865,4.167 -4.167,4.167h-21.666c-2.301,0 -4.167,-1.865 -4.167,-4.167v-21.666c0,-2.302 1.866,-4.167 4.167,-4.167h21.667c2.301,0 4.166,1.865 4.166,4.167z" fill="#388e7c"></path><path d="M35,30.833c0,2.302 -1.865,4.167 -4.167,4.167h-21.666c-2.301,0 -4.167,-1.865 -4.167,-4.167v-21.666c0,-2.302 1.866,-4.167 4.167,-4.167h21.667c2.301,0 4.166,1.865 4.166,4.167z" fill="#45a59d"></path><path d="M18,28.121l-6.936,-6.935l2.122,-2.122l4.814,4.815l10.814,-10.815l2.122,2.122z" fill="#f7f7f7"></path></g></g>
                    </svg> Live Class Via Zoom</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="20" height="20"
                    viewBox="0,0,256,256"
                    style="fill:#000000;">
                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.33333,5.33333)"><path d="M43,38.833c0,2.302 -1.865,4.167 -4.167,4.167h-21.666c-2.301,0 -4.167,-1.865 -4.167,-4.167v-21.666c0,-2.302 1.866,-4.167 4.167,-4.167h21.667c2.301,0 4.166,1.865 4.166,4.167z" fill="#388e7c"></path><path d="M35,30.833c0,2.302 -1.865,4.167 -4.167,4.167h-21.666c-2.301,0 -4.167,-1.865 -4.167,-4.167v-21.666c0,-2.302 1.866,-4.167 4.167,-4.167h21.667c2.301,0 4.166,1.865 4.166,4.167z" fill="#45a59d"></path><path d="M18,28.121l-6.936,-6.935l2.122,-2.122l4.814,4.815l10.814,-10.815l2.122,2.122z" fill="#f7f7f7"></path></g></g>
                    </svg>Gabung Grup Diskusi</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="20" height="20"
                    viewBox="0,0,256,256"
                    style="fill:#000000;">
                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.33333,5.33333)"><path d="M43,38.833c0,2.302 -1.865,4.167 -4.167,4.167h-21.666c-2.301,0 -4.167,-1.865 -4.167,-4.167v-21.666c0,-2.302 1.866,-4.167 4.167,-4.167h21.667c2.301,0 4.166,1.865 4.166,4.167z" fill="#388e7c"></path><path d="M35,30.833c0,2.302 -1.865,4.167 -4.167,4.167h-21.666c-2.301,0 -4.167,-1.865 -4.167,-4.167v-21.666c0,-2.302 1.866,-4.167 4.167,-4.167h21.667c2.301,0 4.166,1.865 4.166,4.167z" fill="#45a59d"></path><path d="M18,28.121l-6.936,-6.935l2.122,-2.122l4.814,4.815l10.814,-10.815l2.122,2.122z" fill="#f7f7f7"></path></g></g>
                    </svg>Tanya Mentor</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="20" height="20"
                    viewBox="0,0,256,256"
                    style="fill:#000000;">
                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.33333,5.33333)"><path d="M43,38.833c0,2.302 -1.865,4.167 -4.167,4.167h-21.666c-2.301,0 -4.167,-1.865 -4.167,-4.167v-21.666c0,-2.302 1.866,-4.167 4.167,-4.167h21.667c2.301,0 4.166,1.865 4.166,4.167z" fill="#388e7c"></path><path d="M35,30.833c0,2.302 -1.865,4.167 -4.167,4.167h-21.666c-2.301,0 -4.167,-1.865 -4.167,-4.167v-21.666c0,-2.302 1.866,-4.167 4.167,-4.167h21.667c2.301,0 4.166,1.865 4.166,4.167z" fill="#45a59d"></path><path d="M18,28.121l-6.936,-6.935l2.122,-2.122l4.814,4.815l10.814,-10.815l2.122,2.122z" fill="#f7f7f7"></path></g></g>
                    </svg>Penilaian dan Sertifikat</li>

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
