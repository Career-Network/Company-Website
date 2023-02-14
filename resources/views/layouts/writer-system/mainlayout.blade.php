<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title }}</title>

    <link href="{{ asset('assets/img/favico.png') }}" rel="icon" />
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon" />

    <link rel="stylesheet" href="{{ asset($css) }} "/>
    
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

    @include('layouts.writer-system.sidebar')

    <main>
      @include('layouts.writer-system.header')
      @yield('content')
    </main>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
  </body>
</html>
