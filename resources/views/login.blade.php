<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>

    <link href="assets/img/favico.png" rel="icon">
    <link href="assets/img/logo.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="assets/css/navbar.css" />
    <link rel="stylesheet" href="assets/css/login.css" />

    <link rel="stylesheet" href="assets/vendor/bootstrap-5.2.0-beta1-dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"/>
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
              src="assets/img/logo.png"
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
                <a class="nav-link" href="#">Company</a>
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
                  Service
                  <i id="toggle-service" class="orange fa-solid fa-angle-down ms-2 mt-1"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Edu Career</a></li>
                  <li><a class="dropdown-item" href="#">Sonic</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-nav btn-primary" href="#" id="btn-primary">
                  Contact
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-nav btn-secondary" href="#" id="btn-secondary">
                  Get Started
                </a>
              </li>
              @endauth

          </ul>
        </div>
      </div>
    </nav>

    <main>
      <div class="heading">
        <p class="title">STAY CONNECTED</p>
        <p class="sub__title">Ayo Mulai Cari Koneksimu Disini</p>
      </div>
      <div class="form__group ">
        <form action="{{ route('login') }}" method="post" >
          @csrf
          @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>    
          @endif
          <div class="input__group position-relative">
            <label for="email">Email Address</label>
            <input
              type="email"
              name="email"
              id="email"
              class="form-control @error('email') is-invalid @enderror"
              placeholder="Masukkan Email Anda"
              required
              value="{{ old('email') }}"
            />
            @error('email')
              <div class="form-control invalid-tooltip">
                {{ $message }}
              </div>
            @enderror
          </div>
          
          <div class="input__group">
            <label for="password">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Masukkan Password Anda"
              required
            />
            @error('password')
              <div class="form-control invalid-tooltip">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="button__group">
            <button type="submit" class="btn__masuk">Masuk</button> <br />
            <a href="{{ route('register') }}" class="btn btn__daftar">
              Daftar Sekarang
            </a>
          </div>
        </form>
      </div>
    </main>

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
      href="assets/vendor/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"
    />
    <script src="assets/js/script.js"></script>
  </body>
</html>
