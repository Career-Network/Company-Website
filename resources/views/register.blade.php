<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register</title>

    <link href="assets/img/favico.png" rel="icon" />
    <link href="assets/img/logo.png" rel="apple-touch-icon" />

    <link rel="stylesheet" href="assets/css/navbar.css" />
    <link rel="stylesheet" href="assets/css/register.css" />
    
    <link
      rel="stylesheet"
      href="assets/vendor/bootstrap-5.2.0-beta1-dist/css/bootstrap.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
    />
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg bg-white fixed-top d-flex align-items-lg-center"
    >
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
                <i
                  id="toggle-service"
                  class="orange fa-solid fa-angle-down ms-2 mt-1"
                ></i>
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
              <a
                class="nav-link btn-nav btn-secondary"
                href="#"
                id="btn-secondary"
              >
                Get Started
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
      <div class="heading" style="margin-top: 170px">
        <p class="title">STAY CONNECTED</p>
        <p class="sub__title">Semua akan menjadi mudah jika terus terhubung</p>
      </div>
      <!-- bener ga bang? -->
      <div class="container" style="max-width: 912px !important;">
        <form action="{{ route('register') }}" method="post">
          @csrf
            <div class="row form__group">
                <div class="input__group col-lg-12 col-md-12 col-sm-12 order-first position-relative">
                    <span class="label">Nama Lengkap</span>
                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Anda" autofocus required value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-tooltip">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="input__group col-sm-6 order-sm-1 order-2 position-relative">
                    <span class="label">Email Address</span>
                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email Anda" required value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-tooltip">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="input__group col-sm-6 order-sm-2 order-1 position-relative">
                    <span class="label">No Handphone</span>
                    <input name="number" type="number"  class="form-control @error('number') is-invalid @enderror" placeholder="Masukkan No Handphone Anda" required value="{{ old('number') }}">
                    @error('number')
                    <div class="invalid-tooltip">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="input__group col-sm-6 order-3 position-relative">
                    <span class="label">Password</span>
                    <input name="password" type="password"  class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password Anda" required >
                    @error('password')
                    <div class="invalid-tooltip">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="input__group col-sm-6 order-4 position-relative">
                  <span class="label">Konfirmasi Password</span>
                  <input name="confirm_password" type="password" class="form-control @error('confirm_password') is-invalid @enderror" placeholder="Masukkan Password Anda" required >
                  @error('confirm_password')
                    <div class="invalid-tooltip">
                      {{ $message }}
                    </div>
                  @enderror
              </div>
            </div>
            <div class="button__group">
              <button type="submit" class="btn__masuk">Daftar</button> <br />
                <a href="{{ route('login') }}" class="btn btn__daftar">
                  Kembali Login
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
    <!-- gatau aku bang, sumpah. moga amana aja -->
    <link
      rel="stylesheet"
      href="assets/vendor/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"
    />
    <script src="assets/js/script.js"></script>
  </body>
</html>
