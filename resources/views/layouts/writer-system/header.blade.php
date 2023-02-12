
<header>
    {{-- Search & Profile Bar --}}
    <section class="search-profile-bar">
        {{-- Search Bar --}}
        <form action="" class="form-header">
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
                @if($active === "Blogs")
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

            @if (!isset($read))
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
            @else
                <a href="" class="option-item delete">
                    <span>Delete</span>
                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 16C7.26522 16 7.51957 15.8946 7.70711 15.7071C7.89464 15.5196 8 15.2652 8 15V9C8 8.73478 7.89464 8.48043 7.70711 8.29289C7.51957 8.10536 7.26522 8 7 8C6.73478 8 6.48043 8.10536 6.29289 8.29289C6.10536 8.48043 6 8.73478 6 9V15C6 15.2652 6.10536 15.5196 6.29289 15.7071C6.48043 15.8946 6.73478 16 7 16ZM17 4H13V3C13 2.20435 12.6839 1.44129 12.1213 0.87868C11.5587 0.316071 10.7956 0 10 0H8C7.20435 0 6.44129 0.316071 5.87868 0.87868C5.31607 1.44129 5 2.20435 5 3V4H1C0.734784 4 0.48043 4.10536 0.292893 4.29289C0.105357 4.48043 0 4.73478 0 5C0 5.26522 0.105357 5.51957 0.292893 5.70711C0.48043 5.89464 0.734784 6 1 6H2V17C2 17.7956 2.31607 18.5587 2.87868 19.1213C3.44129 19.6839 4.20435 20 5 20H13C13.7956 20 14.5587 19.6839 15.1213 19.1213C15.6839 18.5587 16 17.7956 16 17V6H17C17.2652 6 17.5196 5.89464 17.7071 5.70711C17.8946 5.51957 18 5.26522 18 5C18 4.73478 17.8946 4.48043 17.7071 4.29289C17.5196 4.10536 17.2652 4 17 4ZM7 3C7 2.73478 7.10536 2.48043 7.29289 2.29289C7.48043 2.10536 7.73478 2 8 2H10C10.2652 2 10.5196 2.10536 10.7071 2.29289C10.8946 2.48043 11 2.73478 11 3V4H7V3ZM14 17C14 17.2652 13.8946 17.5196 13.7071 17.7071C13.5196 17.8946 13.2652 18 13 18H5C4.73478 18 4.48043 17.8946 4.29289 17.7071C4.10536 17.5196 4 17.2652 4 17V6H14V17ZM11 16C11.2652 16 11.5196 15.8946 11.7071 15.7071C11.8946 15.5196 12 15.2652 12 15V9C12 8.73478 11.8946 8.48043 11.7071 8.29289C11.5196 8.10536 11.2652 8 11 8C10.7348 8 10.4804 8.10536 10.2929 8.29289C10.1054 8.48043 10 8.73478 10 9V15C10 15.2652 10.1054 15.5196 10.2929 15.7071C10.4804 15.8946 10.7348 16 11 16Z" fill="#EF4444"/>
                    </svg>
                </a>

                <a href="" class="option-item create-blog">
                    <span>Edit</span>
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 18.9995H3.75L14.81 7.93951L11.06 4.18951L0 15.2495V18.9995ZM2 16.0795L11.06 7.01952L11.98 7.93951L2.92 16.9995H2V16.0795ZM15.37 1.28951C15.2775 1.19681 15.1676 1.12326 15.0466 1.07308C14.9257 1.0229 14.796 0.99707 14.665 0.99707C14.534 0.99707 14.4043 1.0229 14.2834 1.07308C14.1624 1.12326 14.0525 1.19681 13.96 1.28951L12.13 3.11951L15.88 6.86951L17.71 5.03951C17.8027 4.947 17.8762 4.83711 17.9264 4.71614C17.9766 4.59517 18.0024 4.46548 18.0024 4.33451C18.0024 4.20355 17.9766 4.07386 17.9264 3.95289C17.8762 3.83192 17.8027 3.72203 17.71 3.62951L15.37 1.28951Z" fill="white"/>
                    </svg>
                </a>
            @endif

        </div>
    </section>
</header>
