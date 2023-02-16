@extends('layouts.writer-system.mainlayout',[
  'title'=>'Blogs',
  'css'=>'assets/css/dashboard-writer.css',
  'active' => 'Blogs'
  ])

@section('content')
  <div class="blog-section">
    <section class="header-blogs">
      <h1 class="heading">Blog</h1>

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
              <span id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Bulanan</span>
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
    </section>

    <section class="blogs">
      <div class="blog-card">
        <div class="blog-thumbnail mb-16">
          <img alt="" src="{{ asset('assets/img/blog-cover.png') }}" class="blog-img" />
          <p class="blog-author-date">Indah Mariana, 17 Desember 2025</p>
        </div>
        
        <h1 class="blog-header-card mb-16">Career Network telah luncurkan...</h1>
        <p class="blog-desc-card mb-16">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ...
        </p>
        <a href="/blog/career-network-telah-luncurkan-website-company" class="blog-see-more-btn">
          Lihat Selengkapnya
        </a>
      </div>

      <div class="blog-card">
        <div class="blog-thumbnail mb-16">
          <img alt="" src="{{ asset('assets/img/blog-cover.png') }}" class="blog-img" />
          <p class="blog-author-date">Indah Mariana, 17 Desember 2025</p>
        </div>
        
        <h1 class="blog-header-card mb-16">Career Network telah luncurkan...</h1>
        <p class="blog-desc-card mb-16">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ...
        </p>
        <a href="/blog/career-network-telah-luncurkan-website-company" class="blog-see-more-btn">
          Lihat Selengkapnya
        </a>
      </div>

      <div class="blog-card">
        <div class="blog-thumbnail mb-16">
          <img alt="" src="{{ asset('assets/img/blog-cover.png') }}" class="blog-img" />
          <p class="blog-author-date">Indah Mariana, 17 Desember 2025</p>
        </div>
        
        <h1 class="blog-header-card mb-16">Career Network telah luncurkan...</h1>
        <p class="blog-desc-card mb-16">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ...
        </p>
        <a href="/blog/career-network-telah-luncurkan-website-company" class="blog-see-more-btn">
          Lihat Selengkapnya
        </a>
      </div>

      <div class="blog-card">
        <div class="blog-thumbnail mb-16">
          <img alt="" src="{{ asset('assets/img/blog-cover.png') }}" class="blog-img" />
          <p class="blog-author-date">Indah Mariana, 17 Desember 2025</p>
        </div>
        
        <h1 class="blog-header-card mb-16">Career Network telah luncurkan...</h1>
        <p class="blog-desc-card mb-16">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ...
        </p>
        <a href="/blog/career-network-telah-luncurkan-website-company" class="blog-see-more-btn">
          Lihat Selengkapnya
        </a>
      </div>

      <div class="blog-card">
          <div class="blog-thumbnail mb-16">
            <img alt="" src="{{ asset('assets/img/blog-cover.png') }}" class="blog-img" />
            <p class="blog-author-date">Indah Mariana, 17 Desember 2025</p>
          </div>
          
          <h1 class="blog-header-card mb-16">Career Network telah luncurkan...</h1>
          <p class="blog-desc-card mb-16">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ...
          </p>
          <a href="/blog/career-network-telah-luncurkan-website-company" class="blog-see-more-btn">
            Lihat Selengkapnya
          </a>
      </div>

      <div class="blog-card">
        <div class="blog-thumbnail mb-16">
          <img alt="" src="{{ asset('assets/img/blog-cover.png') }}" class="blog-img" />
          <p class="blog-author-date">Indah Mariana, 17 Desember 2025</p>
        </div>
        
        <h1 class="blog-header-card mb-16">Career Network telah luncurkan...</h1>
        <p class="blog-desc-card mb-16">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ...
        </p>
        <a href="/blog/career-network-telah-luncurkan-website-company" class="blog-see-more-btn">
          Lihat Selengkapnya
        </a>
      </div>

      <div class="blog-card">
        <div class="blog-thumbnail mb-16">
          <img alt="" src="{{ asset('assets/img/blog-cover.png') }}" class="blog-img" />
          <p class="blog-author-date">Indah Mariana, 17 Desember 2025</p>
        </div>
        
        <h1 class="blog-header-card mb-16">Career Network telah luncurkan...</h1>
        <p class="blog-desc-card mb-16">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ...
        </p>
        <a href="/blog/career-network-telah-luncurkan-website-company" class="blog-see-more-btn">
          Lihat Selengkapnya
        </a>
      </div>

      <div class="blog-card">
        <div class="blog-thumbnail mb-16">
          <img alt="" src="{{ asset('assets/img/blog-cover.png') }}" class="blog-img" />
          <p class="blog-author-date">Indah Mariana, 17 Desember 2025</p>
        </div>
        
        <h1 class="blog-header-card mb-16">Career Network telah luncurkan...</h1>
        <p class="blog-desc-card mb-16">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ...
        </p>
        <a href="/blog/career-network-telah-luncurkan-website-company" class="blog-see-more-btn">
          Lihat Selengkapnya
        </a>
      </div>
    </section>
  </div>
@endsection
    