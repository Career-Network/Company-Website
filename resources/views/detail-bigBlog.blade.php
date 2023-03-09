@extends('layouts.navbar_footer',[
  'title'=>'Detail Blog',
  'css'=>'assets/css/detail-bigBlog.css',
  'footer'=> true
  ])

  @section('content')
  <main>
    {{-- <section class="row detail-blog-container"> --}}
        <section id="title-detail-blog">

                  <div class="row title-container">
                <div class="title-text">
                <h2>{{ $blog->title }}</h2>
                </div>
            </div>
          
        </section>

        <section id="author-detail-blog">
                   <div class="share">
                            <div class="share-title">
                                <h4>{{ $blog->author }}, {{ date('d F Y', strtotime($blog->update_date)) }}</h4>
                            </div>
                            <div class="share-button">
                                <button class="share-button-bagikan" id="share-button-bagikan">
                                    <div class="img-button">
                                        <img src="{{ asset('assets/img/detail-blog/Vector.svg') }}" alt="gambar" />
                                    </div>
                                    <div class="text-button">
                                        <h5>Bagikan</h5>
                                    </div>
                                
                                </button>
                            </div>
                            <div class="share-button-modal" id="share-button-modal">
                                <div class="modal-title">
                                    <div class="modal-title-text">
                                        <h6>Career Network telah luncurkan Website Company</h6>
                                    </div>
                                    <div class="modal-title-button">
                                        <button class="close">
                                             <img src="{{ asset('assets/img/detail-blog/Icon-Close-Default.svg') }}" alt="gambar" />
                                        </button>
                                    </div>
                                </div>
                                <div class="modal-text">
                                    <h4>Bagikan artikel ini melalui</h4>
                                </div>
                                <div class="modal-icon" id="modal-icon-sosmed">
                                    <ul>
                                        <li>
                                            <div class="rounded" id="myTooltip" hidden>
                                                <span class="tooltiptext text-white" >Copy to clipboard</span>
                                            </div>
                                            <div class="icon-img clipboard" id="clipboard" onclick="copyToClipboard()" onmouseout="outfunc()">
                                                <img src="{{ asset('assets/img/detail-blog/Copy.svg') }}" alt="gambar" />
                                            </div>
                                            {{-- jika ukurannya tablet atau hp --}}
                                            <div class="icon-text" >
                                                <h4 id="icon-text-sosmed">Copy link</h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon-img">
                                                <a href="https://www.facebook.com/sharer/sharer.php?href={{ url()->current() }}" target="_blank">
                                                    <img src="{{ asset('assets/img/detail-blog/Facebook.svg') }}" alt="gambar" />
                                                </a>
                                            </div>
                                            <div class="icon-text" id="icon-text">
                                                <h4 id="icon-text-sosmed">Facebook</h4>
                                            </div>
                                        </li>
                                         <li>
                                            <div class="icon-img">
                                                <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text='Hallo Career Network'
                                                    ">
                                                    <img src="{{ asset('assets/img/detail-blog/Twitter.svg') }}" alt="gambar" />
                                                </a>
                                            </div>
                                            <div class="icon-text" id="icon-text">
                                                <h4 id="icon-text-sosmed">Twitter</h4>
                                            </div>
                                        </li>
                                         <li>
                                            <div class="icon-img">
                                                <a href="https://wa.me/?text={{ url()->current() }}">
                                                    <img src="{{ asset('assets/img/detail-blog/Whatsapp.svg') }}" alt="gambar" />
                                                </a>
                                            </div>
                                            <div class="icon-text" id="icon-text">
                                                <h4 id="icon-text-sosmed">Whatsapp</h4>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
        </section>

        <section id="information-detail-blog">
            {{-- <div class="container-information"> --}}
                    <div class="information-data row">
                        <img src='@if(substr($blog->image, 0, 10) == "thumbnails") {{ asset("storage/$blog->image") }} @else {{ $blog->image }} @endif' class="thumbnail-detail" alt="{{ $blog->title }}'s Image">
                        {!! $blog->body !!}
                    </div>

                    <div id="tagar-detail-blog">
                        <div class="hastag">
                            <div class="hastag-title">
                                <h3>Tagar</h3>
                            </div>
                            <div class="hastag-list">
                                <ul>
                                    <li>{{ $blog->hastags }}</li>
                                </ul>
                            </div>
                        </div>
                     
                    </div>

            {{-- </div> --}}
      
            <div class="information-navbar">
                <div class="information-navbar-title">
                    <div class="title-1"><h2>Blog Terbaru</h2></div>
                    <div class="title-2"><h3>Lihat semua</h3></div>
                </div>
                <div class="information-navbar-text">
                    <div class="information-navbar-text-all">
                        <div class="information-navbar-img">
                            <img src="{{ asset('assets/img/detail-blog/nav-1.png') }}" alt="gambar">
                        </div>
                        <div class="information-navbar-desc ">
                            <div class="desc-title"><h3>Berbagai Profesi Dunia Data dan Analitik</h3></div>
                            <div class="desc-text"><h4>Toni Sembiring</h4></div>
                            <div class="desc-date">
                                <div class="gray"><h4>Last update</h4></div>
                                <div class="black"><h4>23 Mei 2022</h4></div>
                            </div>
                        </div>
                    </div>

                         <div class="information-navbar-text-all">
                        <div class="information-navbar-img">
                            <img src="{{ asset('assets/img/detail-blog/nav-2.png') }}" alt="gambar">
                        </div>
                        <div class="information-navbar-desc ">
                            <div class="desc-title"><h3>Berbagai Profesi Dunia Data dan Analitik</h3></div>
                            <div class="desc-text"><h4>Toni Sembiring</h4></div>
                               <div class="desc-date">
                                <div class="gray"><h4>Last update</h4></div>
                                <div class="black"><h4>23 Mei 2022</h4></div>
                            </div>
                           
                        </div>
                    </div>

                    <div class="information-navbar-text-all">
                        <div class="information-navbar-img">
                            <img src="{{ asset('assets/img/detail-blog/nav-3.png') }}" alt="gambar">
                        </div>
                        <div class="information-navbar-desc ">
                            <div class="desc-title"><h3>Berbagai Profesi Dunia Data dan Analitik</h3></div>
                            <div class="desc-text"><h4>Toni Sembiring</h4></div>
                               <div class="desc-date">
                                <div class="gray"><h4>Last update</h4></div>
                                <div class="black"><h4>23 Mei 2022</h4></div>
                            </div>
                          
                        </div>
                    </div>



                </div>
            </div>
        </section>
    


    {{-- </section> --}}
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script>
     $(document).ready(function() {
        $("#share-button-bagikan").click(function() {
            $("#share-button-modal").css("display", "flex");
        })
        $(".close").click(function() {
             $("#share-button-modal").css("display", "none");
        })
    })

    function copyToClipboard() {
       var copyText = "{{ url()->current() }}";
       navigator.clipboard.writeText(copyText);
      // ketika di klik id myTooltip properti html hiddennya remove dan tambahkan lagi setelah 4 detik
        document.getElementById("myTooltip").hidden = false;
        setTimeout(function(){ document.getElementById("myTooltip").hidden = true; }, 1500);
    }
    
  </script>
  @endsection