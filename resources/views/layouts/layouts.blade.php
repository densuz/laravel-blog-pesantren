<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('icons/logo.ico') }}"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
         <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
         <link href="{{ asset('css/style.css') }}" rel="stylesheet">



         {{-- Magnifict Img Pop up --}}
        <link href="{{ asset('assets/magnifict/magnific.css') }}" rel="stylesheet">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css">

        <title>@yield('title')</title>

    </head>
    <body>

    {{-- Navbar --}}


    @include('layouts.navbar')

    

    {{-- content --}}

    @yield('content')


    
    <section id="footer" class="bg-white">
        <div class="container py-4">
            <footer>
                <div class="row">
                {{-- Kolom navigasi --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3"> Navigasi</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted" >Berita Sekolah</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted" >Kegiatan Sekolah</a>
                                </li><li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted" >Gallery Sekolah</a>
                                </li><li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted" >Kegiatan Sosial</a>
                                </li>
                            </ul>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">Alumni</a>
                                </li>
                                 <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">Info PSB</a>
                                </li> <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">Prestasi</a>
                                </li>
                                 <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">Video Kegiatan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                {{-- Kolom Sosmed --}}
                 <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3"> Follow Kami</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted" >Facebook</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted" >Instagram</a>
                                </li><li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted" >Twitter</a>
                            </ul>
                          
                        </div>
                    </div>
                    {{-- Kolom Kontak --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3"> Kontak</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted" >info@gmail.com</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted" >0281-02837-xxx</a>
                                </li><li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted" >08386772xxxx</a>
                            </ul>
                          
                        </div>
                    </div>
                    {{-- Kolom Alamat --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3"> Alamat </h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted" >Jl.Jendral Sudirman xxxx</a>
                                </li>
                
                            </ul>
                          
                        </div>
                    </div>



                
                </div>
                
            </footer>
        </div>
    </section>


    <section class="bg-light border-top">
        <div class="container py-4">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <label for="footer">Pesantren Al - Hijrah</label>
                </div>
                <div class="d-flex flex-wrap">
                    <div class="me-4">
                        <p>Syarat & Ketentuan</p>
                    </div>
                    <div>
                        <p>
                            <a href="/kebijakan" class="text-decoration-none text-dark">Kebijakan Privacy</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  {{-- jquery --}}
  <script type='text/javascript' src="{{asset ('assets/jquery/jquery.min.js')}}"></script>
  {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"> </script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

  <script src="{{ asset('assets/magnifict/magnific.js') }}"></script>
  <script>
  const navbar = document.querySelector(".fixed-top");
  window.onscroll = () => {
    if (window.scrollY > 100) {
        navbar.classList.add("scroll-nav-active");
        navbar.classList.add("text-nav-active");
        // navbar.classList.remove("navbar-dark");
    }else{
        navbar.classList.remove("scroll-nav-active");
        // navbar.classList.add("navbar-dark");
    }
  };

    // Magnifict image-link
    $('.image-link').magnificPopup({
        type: 'image',
       retina: {
        ratio : 1,
        replaceSrc : function (item, ratio) {
            return item.src.replace(/\.\w+$/, function (m) {
                return '@2x' + m;
            })
            
        }
       }

    });



   AOS.init();


    //Summernote js
     $(document).ready(function() {
        $('#summernote').summernote({
            height: 300, // Tinggi editor
            // placeholder: 'Tulis teks di sini...',
            // Opsi lain sesuai kebutuhan
        });
    });   
  </script>

    </body>
</html>
