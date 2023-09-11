<nav class="navbar navbar-expand-lg py-3  fixed-top {{ Request::segment(1) != 'home' ? 'bg-white shadow text-dark' : '' }}">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('icons/ic-logo.png') }}"  height="55" width="55" alt="logo-pesantren">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == '' ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == 'profile' ? 'active' : '' }}" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == 'berita' ? 'active' : '' }}" href="{{ url('/berita') }}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == 'gallery' ? 'active' : '' }}" href="#">Gallery</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == 'kontak' ? 'active' : '' }}" href="#">Kontak</a>
                </li>
            </ul>
            <div class="d-flex">
            @if (Auth::check())
    <form action="/logout" method="POST">
        @csrf
        <button class="btn btn-dark" data-aos="flip-up" data-aos-duration="800" data-aos-easing="linear">Logout</button>
    </form>
@else
    <a href="/login" class="btn" id="btn-info" data-aos="flip-up" data-aos-duration="800" data-aos-easing="linear">Login</a>
    <span style="margin: 0 10px;"></span> <!-- Tambahkan spasi di sini -->
    <a href="/register" class="btn btn-danger" data-aos="flip-up" data-aos-duration="800" data-aos-easing="linear">Register</a>
@endif

            {{-- @auth
                <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-dark"  data-aos="flip-up" data-aos-duration="800" data-aos-easing="linier">Logout</button>
                
                </form>
                @else
                <a href="#" class="btn btn-danger"  data-aos="flip-up" data-aos-duration="800" data-aos-easing="linier">Register</a>

            @endauth --}}
            </div>
        </div>
    </div>
</nav>
   
   
   
   {{-- <nav class="navbar navbar-expand-lg py-3 fixed-top {{ Request::segment(1) == '' ? '' : 'bg-white shadow' }}">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('icons/ic-logo.png') }}"  height="55" width="55" alt="logo-pesantren">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Profile</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Gallery</a>
                </li> 
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Kontak</a>
                </li>
            </ul>
        <div class="d-flex">
            
            <button class="btn btn-danger"  data-aos="flip-up" data-aos-duration="800" data-aos-easing="linier" >Register</button>
        </div>
    </div>
</nav> --}}
{{-- Navbar end --}}