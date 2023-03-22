<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('assets/img/favico.png') }}" rel="icon" />
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('assets/img/favico.png') }}" rel="icon" />
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon" />

    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-5.2.0-beta1-dist/css/bootstrap.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/login_writer.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>
        Login Writer | Blog
    </title>

    @include('sweetalert::alert')
</head>
<body>
    {{-- Login Container --}}
    <div class="login-container">
        {{-- Login Form --}}
        <div class="login-form">
            {{-- Logo Career Network --}}
            <img class="logo" src="{{ asset('assets/img/logo.png') }}" alt="" width="240" height="93" />
            {{-- Heading Form --}}
            <div class="heading">
                <h1 class="header">Masuk</h1>
                <p class="sub-header">Selamat datang di Career Network! </p>
            </div>
            {{-- Form --}}
            <form method="POST" action="{{ route('auth-writer') }}" autocomplete="off">
                @csrf
                {{-- Username --}}
                <div class="form-input">
                    <p class="label-input">Nama Pengguna</p>
                    <input type="username" class=" @error('username') is-invalid @enderror" name="username" id="username" placeholder="Ketik nama pengguna">
                    @error('username')
                        <div class="invalid-feedback">
                        Username is not available.
                        </div>
                    @enderror
                </div>
                {{-- Password --}}
                <div class="form-input">
                    <p class="label-input">Kata Sandi</p>
                    <div class="password-input">
                        <input class="input-edit" class=" @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Ketik kata sandi" ><i toggle="#password-field" class="icon-edit fa-solid fa-eye-slash"></i>
                    </div>
                    @error('password')
                        <div class="invalid-feedback">
                        Password is wrong.
                        </div>
                    @enderror
                </div>
                {{-- Remember Me --}}
                {{-- <div class="remember-me">
                    <span class="checkbox-input"><input type="checkbox" name="remember-me" id="remember-me" >Remember Me</span>
                    <a href="">Forgot Password?</a>
                </div> --}}
                {{-- Login Button --}}
                <button type="submit" class="login-btn">
                    Masuk
                </button>
            </form>
            {{-- Link --}}
            {{-- <p class="account-link">Don't have an account? <a class="sign-up" href="">Sign Up</a></p> --}}
            {{-- Socials Media --}}
            <div class="socials">
                <p>Ikuti Kami</p>
                <div class="socials-link">    
                    <a href="https://www.linkedin.com/company/career-network-id/"><img alt="" src="{{ asset('assets/img/login-writer/socials/Linkedin.svg') }}" /></a>
                    <a href="https://www.instagram.com/careernetwork.id/"><img alt="" src="{{ asset('assets/img/login-writer/socials/Instagram.svg') }}" /></a>
                    <a href="https://www.tiktok.com/@career.network"><img alt="" src="{{ asset('assets/img/login-writer/socials/Tiktok.svg') }}" /></a>
                    {{-- <a href=""><img alt="" src="{{ asset('assets/img/login-writer/socials/Facebook.svg') }}" /></a> --}}
                </div>
            </div>
        </div>

        {{-- Login Hero --}}
        <div class="login-hero">
            {{-- Heading --}}
            <div class="heading-hero">
                <h1 class="header-hero">Dashboard Writer</h1>
                {{-- <p class="subheader-hero">Enter your credential to access your account</p> --}}
            </div>
            {{-- Illustration --}}
            <img class="img-up" alt="" src="{{ asset('assets/img/login-writer/Diary-pana 1.png') }}" />
            {{-- Slogan Hero --}}
            <div class="slogan-text">
                Tak ada yang salah dalam menulis, hanya ada kesempatan untuk belajar dan meningkatkan kemampuan
            </div>
        </div>
    </div>
</body>

<script>    
    $(".icon-edit").click(function(){
        $(".icon-edit").toggleClass("fa-eye fa-eye-slash");
        var input = $("#password");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
    });
</script>
</html>
