@extends('layouts.writer-system.mainlayout',[
  'title'=>'Mentors',
  'css'=>'assets/css/detail-mentor.css',
  'active' => 'Mentors'
  ])

@section('content')
  <div class="blog-section">
    <section class="header-blogs">
      <h1 class="heading">Semua Mentor</h1>
    </section>

    <section class="filter-section">
      <div class="first-filter">
          <div class="page-filter">
          <input type="number" min="1" max="9" step="1" value="1">
      </div>

      <div class="menu-filter">
        <div class="menu-title-filter">
          <h4>entries per page</h4>
        </div>
         <div class="menu-select-filter">
             <select name="menu-select" id="menu-select">
                <option value="profile">Profile</option>
                <option value="Bidang">Bidang</option>
                <option value="Pekerjaan">Pekerjaan</option>
                <option value="Kelas">Kelas</option>
                <option value="Deskripsi">Deskripsi</option>
                <option value="Aksi">Aksi</option>
          </select>
        </div>
      </div>
      </div>
      

      <div class="second-filter">
            <div class="search-filter">
        <div class="search-filter-title">
               <h4>Search</h4>
        </div>
        <div class="search-filter-text">
            <div class="search-filter-container">
              <input type="text" class="search-filter-input" />
            </div>
            <div class="search-filter-icon">
              <img src="{{ asset('assets/img/detail-mentor/search.png') }}" />
            </div>
        </div>
      </div>
      </div>
  
    </section>

 <section class="schedule-section">
        <div class="date-calendar-section">
   
        <ul class="date-list">
          <li class="more-space">
            <div class="date-list-div">
                <h2>Profile</h2>
            </div>
          </li>
          <li class="no-space">
            <div class="date-list-div">
                <h2>Bidang</h2>
            </div>
          </li>
          <li class="no-space">
            <div class="date-list-div">
                <h2>Pekerjaan</h2>
            </div>
          </li>
          <li class="more-space">
            <div class="date-list-div">
                <h2>Kelas</h2>
            </div>
          </li>
          <li class="more-space">
            <div class="date-list-div">
                <h2>Deskripsi</h2>
            </div>
          </li>
          <li class="no-space">
            <div class="date-list-div">
                <h2>Aksi</h2>
            </div>
          </li>

        </ul>

      </div>
      <div class="detail-mentor-list">
        <div class="mentor-row">

        <div class="mentor-card">
            <div class="mentor-card-img">
              <img src="/public/assets/img/detail-mentor/mentor-1.png" alt="mentor" />
            </div>
             <div class="mentor-card-text">
              <h3> Samantha Rachel </h3>
            </div>
        </div>

        <div class="mentor-card">
          <div class="mentor-card-text">
              <h3> UI/UX Design</h3>
            </div>
          </div>

          
        <div class="mentor-card">
          <div class="mentor-card-text">
              <h3>Associate UI/UX Designer Trainer </h3>
            </div>
        </div>


          <div class="mentor-card">
            <div class="mentor-card-img">
              <img src="/public/assets/img/detail-mentor/kelas-1.png" alt="kelas" />
            </div>
             <div class="mentor-card-text">
              <h3>Digital Marketing  </h3>
            </div>
        </div>

        <div class="mentor-card">
          <div class="mentor-card-text">
              <h3>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </h3>
            </div>
        </div>

            <div class="mentor-card">
            <div class="mentor-card-btn">
               <img src="{{ asset('assets/img/detail-mentor/trash.png') }}" alt="trash" />

            </div>
             <div class="mentor-card-btn">
                <img src="{{ asset('assets/img/detail-mentor/setting.png') }}" alt="setting" />
            </div>
        </div>









        </div>
 
      </div> 


     
    </section>
  </div>
@endsection
    