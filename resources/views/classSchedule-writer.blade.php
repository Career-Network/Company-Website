@extends('layouts.writer-system.mainlayout',[
  'title'=>'Kelas',
  'css'=>'assets/css/dashboard-writer.css',
  'active' => 'Class_Schedule'
  ])

@section('content')
    {{-- CALENDAR SECTION --}}
    <section class="schedule-section">
      
      <div class="header-schedule-section calendar-header-schedule-section">
        <h1 class="heading-kelas">Semua Kelas</h1>

        <div class="controller-day-section">

          {{-- Button Prev Day --}}
          {{-- <svg class="controller btn-prev" width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.81516 1.06564C10.4002 1.65064 10.4002 2.59564 9.81516 3.18064L3.99516 9.00064L9.81516 14.8206C10.4002 15.4056 10.4002 16.3506 9.81516 16.9356C9.23016 17.5206 8.28516 17.5206 7.70016 16.9356L0.815155 10.0506C0.230155 9.46564 0.230155 8.52064 0.815155 7.93564L7.70016 1.05064C8.27016 0.480643 9.23016 0.480643 9.81516 1.06564Z" fill="black"/>
          </svg> --}}
          {{-- End of Button Prev Day --}}

          <p>entries per page</p>

          {{-- Button Next Day --}}
          {{-- <svg class="controller btn-next" width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.739531 1.06564C0.154531 1.65064 0.154531 2.59564 0.739531 3.18064L6.55953 9.00064L0.739531 14.8206C0.154531 15.4056 0.154531 16.3506 0.739531 16.9356C1.32453 17.5206 2.26953 17.5206 2.85453 16.9356L9.73953 10.0506C10.3245 9.46564 10.3245 8.52064 9.73953 7.93564L2.85453 1.05064C2.28453 0.480643 1.32453 0.480643 0.739531 1.06564Z" fill="black"/>
          </svg> --}}
          {{-- End of Button Next Day --}}

        </div>

        {{-- Dropdown Daily, Monthly, Year --}}
        <span class="option-item dropdown">
          <span id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Filter Berdasarkan</span>
          <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.620811 0.206748C0.871414 -0.0438557 1.26357 -0.0666378 1.53991 0.138402L1.61908 0.206748L7.70818 6.29553L13.7973 0.206748C14.0479 -0.0438557 14.44 -0.0666378 14.7164 0.138402L14.7955 0.206748C15.0462 0.457352 15.0689 0.849506 14.8639 1.12585L14.7955 1.20502L8.20731 7.79325C7.95671 8.04386 7.56456 8.06664 7.28822 7.8616L7.20905 7.79325L0.620811 1.20502C0.345146 0.929352 0.345146 0.482412 0.620811 0.206748Z" fill="#272727"/>
          </svg>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Nama Kelas</a></li>
            <li><a class="dropdown-item" href="#">Harga Kelas</a></li>
            <li><a class="dropdown-item" href="#">Jadwal Kelas</a></li>
            <li><a class="dropdown-item" href="#">Lokasi Belajar</a></li>
            <li><a class="dropdown-item" href="#">Aksi</a></li>
          </ul>
      </span>
      {{-- End of Dropdown Daily, Monthly, Year --}}

        <div class="btn-section">
          {{-- Button Refresh --}}
          <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="search" class="col-form-label">Search</label>&nbsp
            </div>
            <div class="col-auto">
              <input type="search" id="search" class="form-control" aria-describedby="usernameHelpInline">
            </div>
          </div>
          {{-- End of Button Refresh --}}

          
        </div>

      </div>

      <div class="date-calendar-section">
        {{-- List Date --}}
        <ul class="date-list">
          <li >
            <h2>Nama Kelas</h2>
          </li>
          <li>
            <h2>Harga Kelas</h2>
          </li>
          <li>
            <h2>Jadwal Kelas</h2>
          </li>
          <li>
            <h2>Lokasi Belajar</h2>
          </li>
          <li>
            <h2>Aksi</h2>
          </li>
          <li>
        </ul>
        {{-- End of List Date --}}
      </div>

      


    </section>

    

@endsection
    