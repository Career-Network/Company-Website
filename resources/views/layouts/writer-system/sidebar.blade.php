<aside>
    {{-- Navigation --}}
    <section class="navigation">

        {{-- Company Logo --}}
        <div class="header-sidebar">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Career Network's Logo" class="company-logo" />
            <svg class="sidebar-btn" width="19" height="13" viewBox="0 0 19 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.52734 1.25H18.0273M1.52734 6.5H18.0273M1.52734 11.75H18.0273" stroke="#111111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>

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

             {{-- Testimoni Menu --}}
            <a href="{{ route('testimoni-writer') }}" class="menu-item {{ $active == "Testimoni"? "active" : "" }}">
                <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92574 14.39H11.3119C11.7178 14.39 12.0545 14.05 12.0545 13.64C12.0545 13.23 11.7178 12.9 11.3119 12.9H5.92574C5.5198 12.9 5.18317 13.23 5.18317 13.64C5.18317 14.05 5.5198 14.39 5.92574 14.39ZM9.27228 7.9H5.92574C5.5198 7.9 5.18317 8.24 5.18317 8.65C5.18317 9.06 5.5198 9.39 5.92574 9.39H9.27228C9.67822 9.39 10.0149 9.06 10.0149 8.65C10.0149 8.24 9.67822 7.9 9.27228 7.9ZM16.3381 7.02561C16.5708 7.02292 16.8242 7.02 17.0545 7.02C17.302 7.02 17.5 7.22 17.5 7.47V15.51C17.5 17.99 15.5099 20 13.0545 20H5.17327C2.59901 20 0.5 17.89 0.5 15.29V4.51C0.5 2.03 2.5 0 4.96535 0H10.2525C10.5099 0 10.7079 0.21 10.7079 0.46V3.68C10.7079 5.51 12.203 7.01 14.0149 7.02C14.4381 7.02 14.8112 7.02316 15.1377 7.02593C15.3917 7.02809 15.6175 7.03 15.8168 7.03C15.9578 7.03 16.1405 7.02789 16.3381 7.02561ZM16.6111 5.566C15.7972 5.569 14.8378 5.566 14.1477 5.559C13.0527 5.559 12.1507 4.648 12.1507 3.542V0.906C12.1507 0.475 12.6685 0.261 12.9646 0.572C13.5004 1.13476 14.2368 1.90834 14.9699 2.67837C15.7009 3.44632 16.4286 4.21074 16.9507 4.759C17.2398 5.062 17.0279 5.565 16.6111 5.566Z" fill="#D2D2D2" class="menu-text {{ $active == "Testimoni"? "active" : "" }}" />
                </svg>

                <span class="menu-text {{ $active == "Testimoni"? "active" : "" }}">Testimoni</span>
            </a>



            {{-- Schedule Menu --}}
            <a href="{{ route('schedule-writer') }}" class="menu-item {{ $active == "Schedule"? "active" : "" }}">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 20C4.48 20 0 15.53 0 10C0 4.48 4.48 0 10 0C15.53 0 20 4.48 20 10C20 15.53 15.53 20 10 20ZM13.19 13.71C13.31 13.78 13.44 13.82 13.58 13.82C13.83 13.82 14.08 13.69 14.22 13.45C14.43 13.1 14.32 12.64 13.96 12.42L10.4 10.3V5.68C10.4 5.26 10.06 4.93 9.65 4.93C9.24 4.93 8.9 5.26 8.9 5.68V10.73C8.9 10.99 9.04 11.23 9.27 11.37L13.19 13.71Z" fill="#D2D2D2" class="{{ $active == "Schedule"? "active" : "" }}" />
                </svg>

                <span class="menu-text {{ $active == "Schedule"? "active" : "" }}">Schedule</span>
            </a>

    

        </div>
    </section>
    
    {{-- Socials Media --}}
     {{-- <section class="socials">
        <p>Ikuti Kami</p>

        <div class="socials-link">    
            <a href=""><img alt="" src="{{ asset('assets/img/login-writer/socials/Twitter.svg') }}" /></a>

            <a href="https://www.linkedin.com/company/career-network-id/"><img alt="" src="{{ asset('assets/img/login-writer/socials/LinkedIn.svg') }}" /></a>

            <a href="https://www.instagram.com/careernetwork.id/"><img alt="" src="{{ asset('assets/img/login-writer/socials/Instagram.svg') }}" /></a>

            <a href="https://www.tiktok.com/@career.network"><img alt="" src="{{ asset('assets/img/login-writer/socials/Facebook.svg') }}" /></a>
         </div>
    </section> --}}
</aside>