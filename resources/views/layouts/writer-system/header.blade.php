
<header>
    {{-- Search & Profile Bar --}}
    <section class="search-profile-bar">
        {{-- Search Bar --}}
        <form action="">
            {{-- Search Icon --}}
            <label for="">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="11.7659" cy="11.7669" r="8.98856" stroke="#CCCCCC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18.0195 18.4854L21.5436 22.0002" stroke="#CCCCCC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </label>

            {{-- Seacrh Input --}}
            <input type="text" name="" id="" placeholder="Search Blog" />
        </form>

        {{-- Profile Section --}}
        <a class="profile" href="{{ route('login_writer') }}">
            <img alt="" src="{{ asset('assets/img/profile.png') }}" class="profile-picture" />
            <p>Rifky Chirmansyah</p>
        </a>
    </section>

    {{-- Header Dynamic & Menu Options --}}
    <section class="header-dynamic-options">
        {{-- Heading --}}
        <h1 class="heading">
            @if ($title === "Home")
                Hi Rifky Chirmansyah!
            @else
                @if($title === "Blogs")
                    List Artikel Yang Berhasil Diunggah
                @endif
            @endif
        </h1>

        <div class="options">
            <span class="option-item">
                <span>Refresh</span>
                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.742188 1.66504V5.66609H4.74324" stroke="#272727" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.4151 12.335V8.33398H11.4141" stroke="#272727" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M13.7389 4.99947C13.4007 4.04375 12.8259 3.18927 12.0682 2.51577C11.3104 1.84227 10.3944 1.3717 9.40561 1.14797C8.4168 0.924237 7.38743 0.954638 6.41355 1.23633C5.43967 1.51803 4.55302 2.04184 3.83633 2.75889L0.742188 5.66632M15.4127 8.33368L12.3186 11.2411C11.6019 11.9582 10.7152 12.482 9.74135 12.7637C8.76747 13.0454 7.7381 13.0758 6.74929 12.852C5.76048 12.6283 4.84447 12.1577 4.08671 11.4842C3.32896 10.8107 2.75416 9.95625 2.41596 9.00053" stroke="#272727" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>

            <span class="option-item dropdown">
                <span id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Monthly</span>
                <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.620811 0.206748C0.871414 -0.0438557 1.26357 -0.0666378 1.53991 0.138402L1.61908 0.206748L7.70818 6.29553L13.7973 0.206748C14.0479 -0.0438557 14.44 -0.0666378 14.7164 0.138402L14.7955 0.206748C15.0462 0.457352 15.0689 0.849506 14.8639 1.12585L14.7955 1.20502L8.20731 7.79325C7.95671 8.04386 7.56456 8.06664 7.28822 7.8616L7.20905 7.79325L0.620811 1.20502C0.345146 0.929352 0.345146 0.482412 0.620811 0.206748Z" fill="#272727"/>
                </svg>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </span>

            @if ($title === "Blogs")
                <a href="" class="option-item create-blog">
                    <span>Create New</span>
                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 8.99805H8V13.998C8 14.2633 7.89464 14.5176 7.70711 14.7052C7.51957 14.8927 7.26522 14.998 7 14.998C6.73478 14.998 6.48043 14.8927 6.29289 14.7052C6.10536 14.5176 6 14.2633 6 13.998V8.99805H1C0.734784 8.99805 0.48043 8.89269 0.292893 8.70515C0.105357 8.51762 0 8.26326 0 7.99805C0 7.73283 0.105357 7.47848 0.292893 7.29094C0.48043 7.1034 0.734784 6.99805 1 6.99805H6V1.99805C6 1.73283 6.10536 1.47848 6.29289 1.29094C6.48043 1.1034 6.73478 0.998047 7 0.998047C7.26522 0.998047 7.51957 1.1034 7.70711 1.29094C7.89464 1.47848 8 1.73283 8 1.99805V6.99805H13C13.2652 6.99805 13.5196 7.1034 13.7071 7.29094C13.8946 7.47848 14 7.73283 14 7.99805C14 8.26326 13.8946 8.51762 13.7071 8.70515C13.5196 8.89269 13.2652 8.99805 13 8.99805Z" fill="white"/>
                    </svg>
                </a>
            @endif
        </div>
    </section>
</header>
