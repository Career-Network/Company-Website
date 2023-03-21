@extends('layouts.writer-system.mainlayout',[
  'title'=>'Dashboard',
  'css'=>'assets/css/dashboard-writer.css',
  'active' => 'Home'
  ])

@section('content')
    <div class="dashboard-container">

      <div class="artikel-kamu">
        <div class="artikel-terbaik">
          <h1 class="heading-dashboard mb-4">Artikel terbaik kamu</h1>
          {{-- @foreach ($blogs as $blog)
              <a href='{{ "/blog/uploaded/$blog->id" }}' class="card-blog-terdekat">
                <img src='@if(substr($blog->image, 0, 10) == "thumbnails") {{ asset("storage/$blog->image") }} @else {{ $blog->image }} @endif' alt="" class="card-blog-terdekat-img">
                <div class="desc-blog-card-container mt-3">
                  <h1 class="heading-dashboard">{{ substr($blog->title, 0, 40) }} ...</h1>
                  <p>
                    {{ date('d F Y', strtotime($blog->update_date)) }} • 13.00 WIB
                  </p>
                </div>
              </a>
          @endforeach --}}

          <div class="coming-soon">
            <img src="{{ asset('assets/img/writer-system/coming-soon-best-article.png') }}" alt="Coming Soon Iluustration" class="coming-soon-illustration" />
            <p class="coming-soon-text">Coming Soon</p>
          </div>

          {{-- <a href="/blog/uploaded" class="blog-see-more-btn border-0 font-semibold justify-content-end">
                Lihat Semua
          </a> --}}
        </div>

        <div class="jadwal-terdekat">
          <h1 class="heading-dashboard jadwal">Jadwal Terdekat</h1>

          <div class="card-blog-terdekat">
            <img src="{{ asset('assets/img/jadwal-terdekat.png') }}" alt="" class="card-blog-terdekat-img">
            <div class="desc-blog-card-container mt-3">
              <h1 class="heading-dashboard">Career Network telah luncurkan website...</h1>
              <p>
                13 Februari 2023 • 13.00 WIB
              </p>
            </div>
          </div>
        </div>
      </div>

      <h1 class="heading-dashboard">Kelola postingan artikel anda</h1>
      <div class="kelola-postingan">
        <section class="header-blogs">
          <a href="{{ route('blog-writer') }}" class="option-item lihat-blog">
              <span>Lihat Artikel</span>
          </a>

          <h1 class="heading">Jadwalkan Artikel</h1>
        </section>

        <section class="blogs">
            @foreach ($blogs as $blog)
                <div class="blog-card">
                  <div class="blog-content">
                      <div class="blog-thumbnail mb-16">
                        <img alt="{{ $blog->title }}'s Image" src='@if(substr($blog->image, 0, 10) == "thumbnails") {{ asset("storage/$blog->image") }} @else {{ $blog->image }} @endif' class="blog-img" />
                      </div>

                      <div class="blog-desc">
                        <p class="blog-author-date">{{ substr($blog->author, 0, 13) }}, {{ date('d F Y', strtotime($blog->update_date)) }}</p>
                        <h1 class="blog-header-card mb-16">{{ substr($blog->title, 0, 30) }} ...</h1>
                        <p class="blog-desc-card mb-16 mobile-desc">
                          {!! strip_tags(substr($blog->body, 0, 90)) !!}  ...
                        </p>
                        <p class="blog-desc-card mb-16" style="text-align: justify;">
                          {!! strip_tags(substr($blog->body, 0, 150)) !!}  ...
                        </p>
                      </div>
                  </div>
                  
                  <a href="/blog/uploaded/{{ $blog->id }}" class="blog-see-more-btn">
                    Lihat Selengkapnya
                  </a>
                </div>
            @endforeach
        </section>

       <div class="option-item">Lihat Semua Artikel</div>
      </div>
    </div>
    
@endsection
    