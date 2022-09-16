<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title }}</title>

    <link href="{{ asset('assets/img/favico.png') }}" rel="icon" />
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon" />

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" /> 
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}" />
    <link rel="stylesheet" href="{{ asset($css) }} "/>
    <link rel="stylesheet" href="{{ asset('assets/css/footer/simple-footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/footer/main_footer.css') }}" />
    
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/bootstrap-5.2.0-beta1-dist/css/bootstrap.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
    />

    
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-white fixed-top d-flex align-items-lg-center">
      <div class="container">
        <div class="brand">
          <a
            class="navbar-brand"
            href="{{ route('home') }}"
            title="Career Network"
          >
            <img
              src="{{ asset('assets/img/logo.png') }}"
              alt="Career Network"
              class="brand-logo"
            />
          </a>
        </div>
        <button
          class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="toggler-icon top-bar"></span>
          <span class="toggler-icon middle-bar"></span>
          <span class="toggler-icon bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
            
            
            @auth
            <li class="nav-item">
              <a class="nav-link" href="#">Perusahaan</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Layanan
                <i id="toggle-service" class="orange fa-solid fa-angle-down ms-2 mt-1"></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('educareer') }}">Edu Career</a></li>
                <li><a class="dropdown-item" href="#">Sonic</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item dropdown">
                <a
                  class="nav-link"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                    {{ Auth::user()->name }}
                    <i id="toggle-service" class="orange fa-solid fa-angle-down ms-2 mt-1"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">My Profile</a></li>
                    <div class="dropdown-divider"></div>
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">
                               Logout
                            </button>
                        </form>       
                </ul>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link" href="#">Perusahaan</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Layanan
                  <i id="toggle-service" class="orange fa-solid fa-angle-down ms-2 mt-1"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('educareer') }}">Edu Career</a></li>
                  <li><a class="dropdown-item" href="#">Sonic</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item auth-reg">
                  <a class="nav-link btn-nav btn-primary" href="{{ route('register') }}" id="btn-primary">
                    Daftar
                </a>
                <a class="nav-link btn-nav btn-secondary" href="{{ route('login') }}" id="btn-secondary">
                  Masuk
                </a>
              </li>
              {{-- <li class="nav-item">
              </li> --}}
              {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li> --}}
              @endauth

          </ul>
        </div>
      </div>
    </nav>

        @yield('content')

    <footer>
      <div class="footer__content">
        <!-- MASIH KOSONG BANG -->
      </div>
      <div class="footer__bottom">
        <p>Copyright @2022 Career Network All Rights Reserved</p>
      </div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>

    <!-- masih ada yang janggal disini -->
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js') }}"
    />
    <script src="{{ asset('assets/js/script.js') }}"></script>
  </body>
</html>
