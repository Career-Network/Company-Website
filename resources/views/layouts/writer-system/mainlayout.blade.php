<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title }}</title>

    <link href="{{ asset('assets/img/favico.png') }}" rel="icon" />
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon" />

    <link rel="stylesheet" href="{{ asset($css) }} " />

    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-5.2.0-beta1-dist/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
</head>

<body>

    @include('layouts.writer-system.sidebar')

    <main>
        @include('layouts.writer-system.header')
        <div class="content">
            {{-- Header Dynamic & Menu Options --}}
            <section
                class="header-dynamic-options {{ $title == 'Dashboard' ? 'dashboard-page' : '' }} {{ $title == 'Schedule' ? 'schedule-page' : '' }}">
                {{-- Heading --}}
                <div class="heading-container">
                    @if ($title === 'Schedule')
                        <h1 class="heading">Jadwal Postingan</h1>
                        <p>Anda dapat menjadwalkan setiap artikel yang dibuat melalui halaman ini</p>
                    @endif

                    @if ($title === 'Dashboard')
                        <h1 class="heading">Selamat Datang, Rifky Chirmansyah</h1>
                    @endif

                    @if ($title === 'Blogs')
                        <h1 class="heading">Blog</h1>
                        <p>Semua Artikel</p>
                    @else
                        @if (isset($detail) && $detail)
                            <h1 class="heading">Blog</h1>
                            <div class="breadcrums">
                                <a href="{{ route('blog-writer') }}">Semua Artikel</a>/<a
                                    href="{{ route('detail-blog-writer') }}">Detail Artikel</a>
                            </div>
                        @endif
                    @endif

                    @if ($title === 'Mentors')
                        <h1 class="heading">Daftar Mentor</h1>
                    @endif

                </div>

                @if ($title !== 'Create Blog')
                    <div class="options">
                        @if ($title === 'Schedule')
                            <a href="" class="option-item create-blog">
                                <svg width="19" height="21" viewBox="0 0 19 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.1882 1.26862L14.1892 2.01824C16.9439 2.23413 18.7635 4.11119 18.7665 6.98975L18.7773 15.4155C18.7813 18.554 16.8096 20.485 13.6491 20.49L5.92923 20.5C2.78854 20.504 0.79216 18.527 0.788211 15.3795L0.77735 7.05272C0.773401 4.15517 2.52887 2.28311 5.28351 2.03024L5.28253 1.28061C5.28154 0.840832 5.60736 0.509997 6.04178 0.509997C6.47621 0.508998 6.80202 0.838833 6.80301 1.27861L6.804 1.97826L12.6687 1.97027L12.6677 1.27062C12.6668 0.830837 12.9926 0.501002 13.427 0.500002C13.8515 0.499003 14.1872 0.828838 14.1882 1.26862ZM2.29882 7.36157L17.247 7.34158V6.99175C17.2045 4.84283 16.1264 3.71539 14.1912 3.54748L14.1922 4.31709C14.1922 4.74688 13.8575 5.0877 13.4329 5.0877C12.9985 5.0887 12.6717 4.74887 12.6717 4.31909L12.6707 3.5095L6.80597 3.51749L6.80696 4.32609C6.80696 4.75687 6.48213 5.0967 6.04771 5.0967C5.61328 5.0977 5.28648 4.75887 5.28648 4.32809L5.28549 3.55847C3.3602 3.75137 2.29487 4.88281 2.29784 7.05072L2.29882 7.36157ZM13.0173 11.9043V11.9153C13.0271 12.3751 13.4023 12.7239 13.8575 12.7139C14.3018 12.7029 14.6562 12.3221 14.6463 11.8623C14.6256 11.4225 14.2692 11.0637 13.8259 11.0647C13.3717 11.0747 13.0163 11.4445 13.0173 11.9043ZM13.8328 16.392C13.3786 16.382 13.0123 16.0032 13.0113 15.5435C13.0015 15.0837 13.3658 14.7029 13.82 14.6919H13.8298C14.2939 14.6919 14.67 15.0707 14.67 15.5405C14.671 16.0102 14.2958 16.391 13.8328 16.392ZM8.94946 11.9203C8.96921 12.3801 9.34538 12.7389 9.79955 12.7189C10.2438 12.6979 10.5983 12.3181 10.5786 11.8583C10.5677 11.4085 10.2024 11.0587 9.75809 11.0597C9.30391 11.0797 8.94848 11.4605 8.94946 11.9203ZM9.8035 16.3471C9.34933 16.3671 8.97415 16.0082 8.95341 15.5485C8.95341 15.0887 9.30786 14.7089 9.76203 14.6879C10.2063 14.6869 10.5726 15.0367 10.5825 15.4855C10.6032 15.9463 10.2478 16.3261 9.8035 16.3471ZM4.88167 11.9553C4.90142 12.415 5.27759 12.7749 5.73176 12.7539C6.17606 12.7339 6.53051 12.3531 6.50978 11.8933C6.4999 11.4435 6.13459 11.0937 5.68931 11.0947C5.23514 11.1147 4.88069 11.4955 4.88167 11.9553ZM5.73571 16.3521C5.28154 16.3731 4.90636 16.0132 4.88562 15.5535C4.88463 15.0937 5.24007 14.7129 5.69424 14.6929C6.13854 14.6919 6.50484 15.0417 6.51471 15.4915C6.53545 15.9513 6.181 16.3321 5.73571 16.3521Z"
                                        fill="white" />
                                </svg>
                                <span>Jadwalkan Artikel</span>
                            </a>
                        @endif

                        @if ($title !== 'Blogs' && isset($detail))
                            <a href="{{ route('create-writer') }}" class="option-item preview">
                                <span>Preview</span>
                            </a>
                        @endif

                        @if ($title === 'Mentors')
                            <a href="#" class="option-item create-blog">
                                <span data-bs-toggle="modal" data-bs-target="#createMentorModal">Create Mentor</span>
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13 8.99805H8V13.998C8 14.2633 7.89464 14.5176 7.70711 14.7052C7.51957 14.8927 7.26522 14.998 7 14.998C6.73478 14.998 6.48043 14.8927 6.29289 14.7052C6.10536 14.5176 6 14.2633 6 13.998V8.99805H1C0.734784 8.99805 0.48043 8.89269 0.292893 8.70515C0.105357 8.51762 0 8.26326 0 7.99805C0 7.73283 0.105357 7.47848 0.292893 7.29094C0.48043 7.1034 0.734784 6.99805 1 6.99805H6V1.99805C6 1.73283 6.10536 1.47848 6.29289 1.29094C6.48043 1.1034 6.73478 0.998047 7 0.998047C7.26522 0.998047 7.51957 1.1034 7.70711 1.29094C7.89464 1.47848 8 1.73283 8 1.99805V6.99805H13C13.2652 6.99805 13.5196 7.1034 13.7071 7.29094C13.8946 7.47848 14 7.73283 14 7.99805C14 8.26326 13.8946 8.51762 13.7071 8.70515C13.5196 8.89269 13.2652 8.99805 13 8.99805Z"
                                        fill="white" />
                                </svg>
                            </a>
                        @endif

                        @if (!isset($read))
                            @if ($title === 'Blogs' || ($title === 'Dashboard' && !isset($detail)))
                                <a href="{{ route('create-writer') }}" class="option-item create-blog">
                                    <span>Buat Artikel</span>
                                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13 8.99805H8V13.998C8 14.2633 7.89464 14.5176 7.70711 14.7052C7.51957 14.8927 7.26522 14.998 7 14.998C6.73478 14.998 6.48043 14.8927 6.29289 14.7052C6.10536 14.5176 6 14.2633 6 13.998V8.99805H1C0.734784 8.99805 0.48043 8.89269 0.292893 8.70515C0.105357 8.51762 0 8.26326 0 7.99805C0 7.73283 0.105357 7.47848 0.292893 7.29094C0.48043 7.1034 0.734784 6.99805 1 6.99805H6V1.99805C6 1.73283 6.10536 1.47848 6.29289 1.29094C6.48043 1.1034 6.73478 0.998047 7 0.998047C7.26522 0.998047 7.51957 1.1034 7.70711 1.29094C7.89464 1.47848 8 1.73283 8 1.99805V6.99805H13C13.2652 6.99805 13.5196 7.1034 13.7071 7.29094C13.8946 7.47848 14 7.73283 14 7.99805C14 8.26326 13.8946 8.51762 13.7071 8.70515C13.5196 8.89269 13.2652 8.99805 13 8.99805Z"
                                            fill="white" />
                                    </svg>
                                </a>
                            @endif
                        @endif

                    </div>
                @else
                    <span class="option-item preview">
                        <span>Preview</span>
                    </span>
                @endif
            </section>
            @yield('content')
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>

    @yield('js')
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
