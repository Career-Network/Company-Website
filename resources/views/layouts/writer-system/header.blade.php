
<header>
    {{-- Search & Profile Bar --}}
    <section class="search-profile-bar">
        {{-- Search Bar --}}
        <form action="" class="form-header">
            {{-- Seacrh Input --}}
            <input type="text" name="" id="" placeholder="Search" />

            {{-- Search Icon --}}
            <svg width="25" height="25" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.7422 10.3439C12.5329 9.2673 13 7.9382 13 6.5C13 2.91015 10.0899 0 6.5 0C2.91015 0 0 2.91015 0 6.5C0 10.0899 2.91015 13 6.5 13C7.93858 13 9.26801 12.5327 10.3448 11.7415L10.3439 11.7422C10.3734 11.7822 10.4062 11.8204 10.4424 11.8566L14.2929 15.7071C14.6834 16.0976 15.3166 16.0976 15.7071 15.7071C16.0976 15.3166 16.0976 14.6834 15.7071 14.2929L11.8566 10.4424C11.8204 10.4062 11.7822 10.3734 11.7422 10.3439ZM12 6.5C12 9.53757 9.53757 12 6.5 12C3.46243 12 1 9.53757 1 6.5C1 3.46243 3.46243 1 6.5 1C9.53757 1 12 3.46243 12 6.5Z" fill="#212529"/>
            </svg>
        </form>

        {{-- Mobile Header --}}
        <div class="mobile-section-header">
            {{-- Company Logo Mobile --}}
            <img src="{{ asset('assets/img/logo.png') }}" alt="Career Network's Logo" class="company-logo" />

            <div class="btn-mobile-section">
                <div class="btn-wrapper" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.00461 2.0023C4.94293 2.0023 3.92473 2.42406 3.17401 3.17478C2.42329 3.9255 2.00154 4.9437 2.00154 6.00538C2.00154 7.06706 2.42329 8.08526 3.17401 8.83598C3.92473 9.5867 4.94293 10.0085 6.00461 10.0085C7.06629 10.0085 8.08449 9.5867 8.83521 8.83598C9.58593 8.08526 10.0077 7.06706 10.0077 6.00538C10.0077 4.9437 9.58593 3.9255 8.83521 3.17478C8.08449 2.42406 7.06629 2.0023 6.00461 2.0023ZM1.13549e-07 6.00538C-0.000120482 5.06036 0.222814 4.12865 0.650671 3.28603C1.07853 2.44341 1.69923 1.71368 2.46229 1.15618C3.22535 0.598679 4.10922 0.229154 5.04202 0.077659C5.97482 -0.0738365 6.9302 -0.00302481 7.83048 0.284335C8.73075 0.571695 9.55049 1.06749 10.223 1.73139C10.8955 2.3953 11.4019 3.20856 11.7008 4.10505C11.9998 5.00154 12.0829 5.95593 11.9435 6.89061C11.8041 7.82529 11.446 8.71386 10.8984 9.48405L15.7191 14.3048C15.9014 14.4935 16.0022 14.7463 16 15.0087C15.9977 15.2711 15.8924 15.5221 15.7069 15.7076C15.5213 15.8932 15.2703 15.9984 15.0079 16.0007C14.7455 16.003 14.4927 15.9021 14.304 15.7198L9.48428 10.9001C8.58596 11.5389 7.52913 11.9181 6.42961 11.9961C5.3301 12.0741 4.23032 11.848 3.2508 11.3424C2.27127 10.8369 1.4498 10.0715 0.876397 9.13013C0.302993 8.18873 -0.000214215 7.10766 1.13549e-07 6.00538Z" fill="#3A3F44"/>
                    </svg>
                </div>

                <div class="btn-wrapper btn-aside" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.14286C0 0.839753 0.120408 0.549063 0.334735 0.334735C0.549062 0.120408 0.839753 0 1.14286 0H14.8571C15.1602 0 15.4509 0.120408 15.6653 0.334735C15.8796 0.549063 16 0.839753 16 1.14286C16 1.44596 15.8796 1.73665 15.6653 1.95098C15.4509 2.16531 15.1602 2.28571 14.8571 2.28571H1.14286C0.839753 2.28571 0.549062 2.16531 0.334735 1.95098C0.120408 1.73665 0 1.44596 0 1.14286ZM0 6.85714C0 6.55404 0.120408 6.26335 0.334735 6.04902C0.549062 5.83469 0.839753 5.71429 1.14286 5.71429H14.8571C15.1602 5.71429 15.4509 5.83469 15.6653 6.04902C15.8796 6.26335 16 6.55404 16 6.85714C16 7.16025 15.8796 7.45094 15.6653 7.66527C15.4509 7.87959 15.1602 8 14.8571 8H1.14286C0.839753 8 0.549062 7.87959 0.334735 7.66527C0.120408 7.45094 0 7.16025 0 6.85714ZM0 12.5714C0 12.2683 0.120408 11.9776 0.334735 11.7633C0.549062 11.549 0.839753 11.4286 1.14286 11.4286H14.8571C15.1602 11.4286 15.4509 11.549 15.6653 11.7633C15.8796 11.9776 16 12.2683 16 12.5714C16 12.8745 15.8796 13.1652 15.6653 13.3796C15.4509 13.5939 15.1602 13.7143 14.8571 13.7143H1.14286C0.839753 13.7143 0.549062 13.5939 0.334735 13.3796C0.120408 13.1652 0 12.8745 0 12.5714Z" fill="#3A3F44"/>
                    </svg>
                </div>
            </div>
        </div>

        {{-- Profile Section --}}
        <div class="profile-section-container">
            {{-- Search Icon --}}
            <svg class="btn-search" data-bs-toggle="modal" data-bs-target="#searchModal" width="25" height="25" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.7422 10.3439C12.5329 9.2673 13 7.9382 13 6.5C13 2.91015 10.0899 0 6.5 0C2.91015 0 0 2.91015 0 6.5C0 10.0899 2.91015 13 6.5 13C7.93858 13 9.26801 12.5327 10.3448 11.7415L10.3439 11.7422C10.3734 11.7822 10.4062 11.8204 10.4424 11.8566L14.2929 15.7071C14.6834 16.0976 15.3166 16.0976 15.7071 15.7071C16.0976 15.3166 16.0976 14.6834 15.7071 14.2929L11.8566 10.4424C11.8204 10.4062 11.7822 10.3734 11.7422 10.3439ZM12 6.5C12 9.53757 9.53757 12 6.5 12C3.46243 12 1 9.53757 1 6.5C1 3.46243 3.46243 1 6.5 1C9.53757 1 12 3.46243 12 6.5Z" fill="#212529"/>
            </svg>

            <div class="notification-section" id="notification-btn">
                <span class="notification-count">2</span>
                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.7773 22.5C13.2961 22.5 14.5273 21.2688 14.5273 19.75H9.02734C9.02734 21.2688 10.2586 22.5 11.7773 22.5Z" fill="#012970"/>
                    <path d="M11.7773 3.13759L10.6812 3.35897C8.16869 3.8664 6.27737 6.08887 6.27737 8.75C6.27737 9.61326 6.09262 11.7712 5.64643 13.8955C5.42493 14.95 5.12859 16.048 4.73472 17H18.82C18.4261 16.048 18.1298 14.95 17.9083 13.8955C17.4621 11.7712 17.2774 9.61325 17.2774 8.75C17.2774 6.08885 15.386 3.86637 12.8735 3.35896L11.7773 3.13759ZM20.3289 17C20.6359 17.6152 20.9919 18.1014 21.4023 18.375H2.15234C2.56282 18.1014 2.91883 17.6152 3.22581 17C4.46127 14.5241 4.90237 9.95885 4.90237 8.75C4.90237 5.42159 7.26762 2.64562 10.409 2.01118C10.4046 1.96638 10.4023 1.92096 10.4023 1.875C10.4023 1.11561 11.018 0.5 11.7773 0.5C12.5367 0.5 13.1523 1.11561 13.1523 1.875C13.1523 1.92095 13.1501 1.96638 13.1457 2.01117C16.2871 2.64558 18.6524 5.42157 18.6524 8.75C18.6524 9.95885 19.0934 14.5241 20.3289 17Z" fill="#012970"/>
                </svg>
            </div>

            <a class="profile" href="{{ route('login_writer') }}">
                <img alt="" src="{{ asset('assets/img/profile.png') }}" class="profile-picture" />
                <p>Rifky Chirmansyah</p>
            </a>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Search Artikel</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                 {{-- Search Bar --}}
                <form action="" class="form-header">
                    {{-- Seacrh Input --}}
                    <input type="text" name="" id="" placeholder="Search" />

                    {{-- Search Icon --}}
                    <svg width="25" height="25" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.7422 10.3439C12.5329 9.2673 13 7.9382 13 6.5C13 2.91015 10.0899 0 6.5 0C2.91015 0 0 2.91015 0 6.5C0 10.0899 2.91015 13 6.5 13C7.93858 13 9.26801 12.5327 10.3448 11.7415L10.3439 11.7422C10.3734 11.7822 10.4062 11.8204 10.4424 11.8566L14.2929 15.7071C14.6834 16.0976 15.3166 16.0976 15.7071 15.7071C16.0976 15.3166 16.0976 14.6834 15.7071 14.2929L11.8566 10.4424C11.8204 10.4062 11.7822 10.3734 11.7422 10.3439ZM12 6.5C12 9.53757 9.53757 12 6.5 12C3.46243 12 1 9.53757 1 6.5C1 3.46243 3.46243 1 6.5 1C9.53757 1 12 3.46243 12 6.5Z" fill="#212529"/>
                    </svg>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn" style="background: #ff5722; color: #FFF;">Search</button>
            </div>
            </div>
        </div>
    </div>


    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                <a class="profile" href="{{ route('login_writer') }}">
                    <img alt="" src="{{ asset('assets/img/profile.png') }}" class="profile-picture" />
                    <p>Rifky Chirmansyah</p>
                </a>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="menus">
                {{-- Home Menu --}}
                <a href="{{ route('dashboard-writer') }}" class="menu-item {{ $active == "Home"? "active" : "" }}">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.13478 18.7733V15.7156C7.13478 14.9351 7.77217 14.3023 8.55844 14.3023H11.4326C11.8102 14.3023 12.1723 14.4512 12.4393 14.7163C12.7063 14.9813 12.8563 15.3408 12.8563 15.7156V18.7733C12.8539 19.0978 12.9821 19.4099 13.2124 19.6402C13.4427 19.8705 13.756 20 14.0829 20H16.0438C16.9596 20.0024 17.8388 19.6428 18.4872 19.0008C19.1356 18.3588 19.5 17.487 19.5 16.5778V7.86686C19.5 7.13246 19.1721 6.43584 18.6046 5.96467L11.934 0.675869C10.7737 -0.251438 9.11111 -0.221498 7.98539 0.746979L1.46701 5.96467C0.872741 6.42195 0.517552 7.12064 0.5 7.86686V16.5689C0.5 18.4639 2.04738 20 3.95617 20H5.87229C6.55123 20 7.103 19.4562 7.10792 18.7822L7.13478 18.7733Z" fill="#D2D2D2" class="{{ $active == "Home"? "active" : "" }}" />
                    </svg>

                    <span class="menu-text {{ $active == "Home"? "active" : "" }}">Dashboard</span>
                </a>

                {{-- Blog Menu --}}
                <a href="{{ route('blog-writer') }}" class="menu-item {{ $active == "Blogs"? "active" : "" }}">
                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92574 14.39H11.3119C11.7178 14.39 12.0545 14.05 12.0545 13.64C12.0545 13.23 11.7178 12.9 11.3119 12.9H5.92574C5.5198 12.9 5.18317 13.23 5.18317 13.64C5.18317 14.05 5.5198 14.39 5.92574 14.39ZM9.27228 7.9H5.92574C5.5198 7.9 5.18317 8.24 5.18317 8.65C5.18317 9.06 5.5198 9.39 5.92574 9.39H9.27228C9.67822 9.39 10.0149 9.06 10.0149 8.65C10.0149 8.24 9.67822 7.9 9.27228 7.9ZM16.3381 7.02561C16.5708 7.02292 16.8242 7.02 17.0545 7.02C17.302 7.02 17.5 7.22 17.5 7.47V15.51C17.5 17.99 15.5099 20 13.0545 20H5.17327C2.59901 20 0.5 17.89 0.5 15.29V4.51C0.5 2.03 2.5 0 4.96535 0H10.2525C10.5099 0 10.7079 0.21 10.7079 0.46V3.68C10.7079 5.51 12.203 7.01 14.0149 7.02C14.4381 7.02 14.8112 7.02316 15.1377 7.02593C15.3917 7.02809 15.6175 7.03 15.8168 7.03C15.9578 7.03 16.1405 7.02789 16.3381 7.02561ZM16.6111 5.566C15.7972 5.569 14.8378 5.566 14.1477 5.559C13.0527 5.559 12.1507 4.648 12.1507 3.542V0.906C12.1507 0.475 12.6685 0.261 12.9646 0.572C13.5004 1.13476 14.2368 1.90834 14.9699 2.67837C15.7009 3.44632 16.4286 4.21074 16.9507 4.759C17.2398 5.062 17.0279 5.565 16.6111 5.566Z" fill="#D2D2D2" class="menu-text {{ $active == "Blogs"? "active" : "" }}" />
                    </svg>

                    <span class="menu-text {{ $active == "Blogs"? "active" : "" }}">Blog</span>
                </a>

                {{-- Schedule Menu --}}
                <a href="{{ route('schedule-writer') }}" class="menu-item {{ $active == "Schedule"? "active" : "" }}">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 20C4.48 20 0 15.53 0 10C0 4.48 4.48 0 10 0C15.53 0 20 4.48 20 10C20 15.53 15.53 20 10 20ZM13.19 13.71C13.31 13.78 13.44 13.82 13.58 13.82C13.83 13.82 14.08 13.69 14.22 13.45C14.43 13.1 14.32 12.64 13.96 12.42L10.4 10.3V5.68C10.4 5.26 10.06 4.93 9.65 4.93C9.24 4.93 8.9 5.26 8.9 5.68V10.73C8.9 10.99 9.04 11.23 9.27 11.37L13.19 13.71Z" fill="#D2D2D2" class="{{ $active == "Schedule"? "active" : "" }}" />
                    </svg>

                    <span class="menu-text {{ $active == "Schedule"? "active" : "" }}">Schedule</span>
                </a>

                {{-- Kelas Schedule Menu --}}
                <a href="{{ route('classSchedule-writer') }}" class="menu-item {{ $active == "Class_Schedule"? "active" : "" }}">
                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92574 14.39H11.3119C11.7178 14.39 12.0545 14.05 12.0545 13.64C12.0545 13.23 11.7178 12.9 11.3119 12.9H5.92574C5.5198 12.9 5.18317 13.23 5.18317 13.64C5.18317 14.05 5.5198 14.39 5.92574 14.39ZM9.27228 7.9H5.92574C5.5198 7.9 5.18317 8.24 5.18317 8.65C5.18317 9.06 5.5198 9.39 5.92574 9.39H9.27228C9.67822 9.39 10.0149 9.06 10.0149 8.65C10.0149 8.24 9.67822 7.9 9.27228 7.9ZM16.3381 7.02561C16.5708 7.02292 16.8242 7.02 17.0545 7.02C17.302 7.02 17.5 7.22 17.5 7.47V15.51C17.5 17.99 15.5099 20 13.0545 20H5.17327C2.59901 20 0.5 17.89 0.5 15.29V4.51C0.5 2.03 2.5 0 4.96535 0H10.2525C10.5099 0 10.7079 0.21 10.7079 0.46V3.68C10.7079 5.51 12.203 7.01 14.0149 7.02C14.4381 7.02 14.8112 7.02316 15.1377 7.02593C15.3917 7.02809 15.6175 7.03 15.8168 7.03C15.9578 7.03 16.1405 7.02789 16.3381 7.02561ZM16.6111 5.566C15.7972 5.569 14.8378 5.566 14.1477 5.559C13.0527 5.559 12.1507 4.648 12.1507 3.542V0.906C12.1507 0.475 12.6685 0.261 12.9646 0.572C13.5004 1.13476 14.2368 1.90834 14.9699 2.67837C15.7009 3.44632 16.4286 4.21074 16.9507 4.759C17.2398 5.062 17.0279 5.565 16.6111 5.566Z" fill="#D2D2D2" class="menu-text {{ $active == "Class_Schedule"? "active" : "" }}" />
                    </svg>

                    <span class="menu-text {{ $active == "Class_Schedule"? "active" : "" }}">Kelas</span>
                </a>
                     {{-- Mentor Menu --}}
                <a href="{{ route('detail-mentor') }}" class="menu-item {{ $active == "Mentors"? "active" : "" }}">
                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92574 14.39H11.3119C11.7178 14.39 12.0545 14.05 12.0545 13.64C12.0545 13.23 11.7178 12.9 11.3119 12.9H5.92574C5.5198 12.9 5.18317 13.23 5.18317 13.64C5.18317 14.05 5.5198 14.39 5.92574 14.39ZM9.27228 7.9H5.92574C5.5198 7.9 5.18317 8.24 5.18317 8.65C5.18317 9.06 5.5198 9.39 5.92574 9.39H9.27228C9.67822 9.39 10.0149 9.06 10.0149 8.65C10.0149 8.24 9.67822 7.9 9.27228 7.9ZM16.3381 7.02561C16.5708 7.02292 16.8242 7.02 17.0545 7.02C17.302 7.02 17.5 7.22 17.5 7.47V15.51C17.5 17.99 15.5099 20 13.0545 20H5.17327C2.59901 20 0.5 17.89 0.5 15.29V4.51C0.5 2.03 2.5 0 4.96535 0H10.2525C10.5099 0 10.7079 0.21 10.7079 0.46V3.68C10.7079 5.51 12.203 7.01 14.0149 7.02C14.4381 7.02 14.8112 7.02316 15.1377 7.02593C15.3917 7.02809 15.6175 7.03 15.8168 7.03C15.9578 7.03 16.1405 7.02789 16.3381 7.02561ZM16.6111 5.566C15.7972 5.569 14.8378 5.566 14.1477 5.559C13.0527 5.559 12.1507 4.648 12.1507 3.542V0.906C12.1507 0.475 12.6685 0.261 12.9646 0.572C13.5004 1.13476 14.2368 1.90834 14.9699 2.67837C15.7009 3.44632 16.4286 4.21074 16.9507 4.759C17.2398 5.062 17.0279 5.565 16.6111 5.566Z" fill="#D2D2D2" class="menu-text {{ $active == "Mentors"? "active" : "" }}" />
                    </svg>

                    <span class="menu-text {{ $active == "Mentors"? "active" : "" }}">Mentor</span>
                </a>


            </div>

        </div>
    </div>

</header>
