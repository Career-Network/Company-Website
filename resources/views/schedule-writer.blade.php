@extends('layouts.writer-system.mainlayout',[
  'title'=>'Schedule',
  'css'=>'assets/css/dashboard-writer.css',
  'active' => 'Schedule'
  ])

@section('content')
    {{-- CALENDAR SECTION --}}
    <section class="schedule-section">

      <div class="header-schedule-section calendar-header-schedule-section">

        <div class="controller-day-section">

          {{-- Button Prev Day --}}
          <svg class="controller btn-prev" width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.81516 1.06564C10.4002 1.65064 10.4002 2.59564 9.81516 3.18064L3.99516 9.00064L9.81516 14.8206C10.4002 15.4056 10.4002 16.3506 9.81516 16.9356C9.23016 17.5206 8.28516 17.5206 7.70016 16.9356L0.815155 10.0506C0.230155 9.46564 0.230155 8.52064 0.815155 7.93564L7.70016 1.05064C8.27016 0.480643 9.23016 0.480643 9.81516 1.06564Z" fill="black"/>
          </svg>
          {{-- End of Button Prev Day --}}

          <p>Hari Ini</p>

          {{-- Button Next Day --}}
          <svg class="controller btn-next" width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.739531 1.06564C0.154531 1.65064 0.154531 2.59564 0.739531 3.18064L6.55953 9.00064L0.739531 14.8206C0.154531 15.4056 0.154531 16.3506 0.739531 16.9356C1.32453 17.5206 2.26953 17.5206 2.85453 16.9356L9.73953 10.0506C10.3245 9.46564 10.3245 8.52064 9.73953 7.93564L2.85453 1.05064C2.28453 0.480643 1.32453 0.480643 0.739531 1.06564Z" fill="black"/>
          </svg>
          {{-- End of Button Next Day --}}

        </div>

        {{-- Header Calendar  --}}
        <h2>{{ date('F Y') }}</h2>
        {{-- End of Header Calendar  --}}

        <div class="btn-section">
          {{-- Button Refresh --}}
          <span class="option-item">
              <span>Segarkan</span>
              <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.10547 1.66406V5.66511H5.10652" stroke="#272727" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.7745 12.335V8.33398H11.7734" stroke="#272727" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M14.1022 4.99947C13.764 4.04375 13.1892 3.18927 12.4315 2.51577C11.6737 1.84227 10.7577 1.3717 9.76889 1.14797C8.78008 0.924237 7.75071 0.954638 6.77683 1.23633C5.80295 1.51803 4.9163 2.04184 4.19962 2.75889L1.10547 5.66632M15.776 8.33368L12.6818 11.2411C11.9652 11.9582 11.0785 12.482 10.1046 12.7637C9.13075 13.0454 8.10138 13.0758 7.11257 12.852C6.12376 12.6283 5.20775 12.1577 4.44999 11.4842C3.69224 10.8107 3.11744 9.95625 2.77924 9.00053" stroke="#272727" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
          </span>
          {{-- End of Button Refresh --}}

          {{-- Dropdown Daily, Monthly, Year --}}
          <span class="option-item dropdown">
              <span id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Daily</span>
              <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.620811 0.206748C0.871414 -0.0438557 1.26357 -0.0666378 1.53991 0.138402L1.61908 0.206748L7.70818 6.29553L13.7973 0.206748C14.0479 -0.0438557 14.44 -0.0666378 14.7164 0.138402L14.7955 0.206748C15.0462 0.457352 15.0689 0.849506 14.8639 1.12585L14.7955 1.20502L8.20731 7.79325C7.95671 8.04386 7.56456 8.06664 7.28822 7.8616L7.20905 7.79325L0.620811 1.20502C0.345146 0.929352 0.345146 0.482412 0.620811 0.206748Z" fill="#272727"/>
              </svg>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Daily</a></li>
                <li><a class="dropdown-item" href="#">Monthly</a></li>
                <li><a class="dropdown-item" href="#">Year</a></li>
              </ul>
          </span>
          {{-- End of Dropdown Daily, Monthly, Year --}}
        </div>

      </div>

      <div class="date-calendar-section">
        {{-- List Date --}}
        <ul class="date-list">
          <li class="active-date-selected">
            <h2>Senin</h2>
            <p>13</p>
          </li>
          <li>
            <h2>Selasa</h2>
            <p>14</p>
          </li>
          <li>
            <h2>Rabu</h2>
            <p>15</p>
          </li>
          <li>
            <h2>Kamis</h2>
            <p>16</p>
          </li>
          <li>
            <h2>Jum'at</h2>
            <p>17</p>
          </li>
          <li>
            <h2>Sabtu</h2>
            <p>18</p>
          </li>
          <li>
            <h2>Minggu</h2>
            <p>19</p>
          </li>
        </ul>
        {{-- End of List Date --}}
      </div>

      @if (sizeof($blogs) == 0)
        <div class="articles-section empty-article calendar-empty-article">
          {{-- Content Empty --}}
          <img class="empty-article-illustration" src="{{ asset('assets/img/writer-system/calendar.png') }}" alt="Calendar Writer Illustration">
          <article class="desc-container">
            <h2>Jadwalkan Artikel Terbaru Anda</h2>
            <p>Memudahkan aktivitas upload lebih efisien</p>
          </article>
          {{-- End of Content Empty --}}
        </div>
      @else 
        <section class="blogs mt-4">
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
                            {!! strip_tags(substr($blog->body, 0, 100)) !!}  ...
                          </p>
                        </div>
                    </div>
                    
                    <a href="/blog/uploaded/{{ $blog->id }}" class="blog-see-more-btn">
                      Lihat Selengkapnya
                    </a>
                  </div>
              @endforeach
        </section>
      @endif

    </section>

    {{-- ARTICLE DRAFT SECTION --}}
    <div class="schedule-section">

      <div class="header-schedule-section">
        <h2>Artikel Draf</h2>
      </div>

      <div id="draftContainer" class="articles-section empty-article draft-empty-article">
        {{-- Content Empty --}}
        <img class="empty-article-illustration" src="{{ asset('assets/img/writer-system/calendar.png') }}" alt="Calendar Writer Illustration">
        <article class="desc-container">
          <h2>Tidak Ada Artikel Draf</h2>
          <p>Memudahkan aktivitas upload lebih efisien</p>
        </article>
        {{-- End of Content Empty --}}
      </div>

      <section class="blogs mt-5" id="blogContainer">
       {{-- @foreach ($blogs as $blog)
          <div class="blog-card">
            <div class="blog-content">
                <div class="blog-thumbnail mb-16">
                  <img alt="{{ $blog->title }}'s Image" src='{{ asset("storage/$blog->image") }}' class="blog-img" />
                </div>

                <div class="blog-desc">
                  <p class="blog-author-date">{{ substr($blog->author, 0, 13) }}, {{ date('d F Y', strtotime($blog->update_date)) }}</p>
                  <h1 class="blog-header-card mb-16">{{ substr($blog->title, 0, 30) }} ...</h1>
                  <p class="blog-desc-card mb-16 mobile-desc">
                    {!! (strip_tags(substr($blog->body, 0, 90))) !!}  ...
                  </p>
                  <p class="blog-desc-card mb-16">
                   {!! strip_tags(substr($blog->body, 0, 150)) !!}  ...
                  </p>
                </div>
            </div>
            
            <a href="/blog/uploaded/{{ $blog->id }}" class="blog-see-more-btn">
              Lihat Selengkapnya
            </a>
          </div>
       @endforeach --}}
    </section>

    </div>

<script>
  const draftContainer = document.getElementById("draftContainer");
  const blogContainer  = document.getElementById("blogContainer");

  if(localStorage.getItem("drafts")) {
    blogContainer.style.display  = "grid";
    draftContainer.style.display = "none";

    // loop through storage element
    const drafts = JSON.parse(localStorage.getItem("drafts"));
    drafts.map((draft, index) => {
      
    })
  } else {
    blogContainer.style.display  = "none";
    draftContainer.style.display = "flex";
  }
</script>
@endsection
    