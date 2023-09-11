
  @extends('layouts.layouts')

    @section('title')
        Beranda
    @stop

  @section('content')
  
    <section id="hero" class="px-0">
     <div class="container text-center text-white" data-aos="fade-up">
        <div class="hero-title">
            <h1 class="hero-text">Selamat datang <br> Pesantren AL - HIJRAH</h1>
            <h4>Pondok Pesantren Moden Concept Islamic Kaffah</h4>
        </div>
     </div>
    </section>
    <section id="program" style="margin-top: -30px">
        <div class="container col-xxl-9">
            <div class="row"  data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="800">
                <div class="col-lg-3 col-md-6 col mb-2">
                    <div class="bg-white rounded-3 shadow p-3  d-flex  justify-content-between align-items-center">
                        <div> 
                            <p class="fw-bold " >Pendidikan Berkualitas</p>
                        </div>
                         <img src="{{ asset('icons/ic-book.png') }}" height="55" width="55" alt="ic-book">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div> 
                            <p class="fw-bold">Pendidikan Berakhlak</p>
                        </div>
                        <img src="{{ asset('icons/ic-globe.png') }}" height="55" width="55" alt="ic-book">
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 col mb-2">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div> 
                            <p class="fw-bold ">Pendidikan Muamalah</p>
                        </div>
                        <img src="{{ asset('icons/ic-neraca.png') }}" height="55" width="55" alt="ic-book">
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 col mb-2">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div> 
                            <p class="fw-bold">Pendidikan Teknologi</p>
                        </div>
                        <img src="{{ asset('icons/ic-komputer.png') }}" height="55" width="55" alt="ic-book">
                    </div>
                </div>
            </div>
        </div>
    
    </section>

    {{-- Berita --}}

    <section id="berita" class="py-5" >
    <div class="container">


       <div class="header-berita text-center">
            <h2 class="fw-bold"> Berita Kegiatan Pondok Pesantren</h2>
       </div>

       <div class="row py-5">
            <div class="col-lg-4" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="linear" data-aos-duration="1200">
                <div class="card border-0">
                    <img src="{{ asset('images/il-berita-01.png') }}" class="img-fluid"  alt="">
                    <div class="konten-berita">
                        <p class="fw-bold mb-3 text-secondary">21/09/2023</p>
                        <h4>Pengajian Rutin Bulanan Pesantren AL - HIJRAH</h4>
                        <p class="text-secondary">#pesantrenmodern</p>
                        <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
             <div class="col-lg-4" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="linear" data-aos-duration="1200">
                <div class="card border-0">
                    <img src="{{ asset('images/il-berita-02.png') }}" class="img-fluid" alt="">
                    <div class="konten-berita">
                        <p class="fw-bold mb-3 text-secondary">20/09/2023</p>
                        <h4>Hafalan AL-QURAN Pesantren AL - HIJRAH</h4>
                        <p class="text-secondary">#pesantrenmodern</p>
                        <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
             <div class="col-lg-4" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="linear" data-aos-duration="1200">
                <div class="card border-0">
                    <img src="{{ asset('images/il-berita-03.png') }}" class="img-fluid" alt="">
                    <div class="konten-berita">
                        <p class="fw-bold mb-3 text-secondary">19/09/2023</p>
                        <h4>Pembagian Sembako Pesantren AL - HIJRAH</h4>
                        <p class="text-secondary">#pesantrenmodern</p>
                        <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
            
       </div>

       <div class="footer-berita text-center">
            <a href="{{ url('/berita') }}" class="btn btn-outline-danger">Berita Lainnya</a>
       </div>


    </div>
    </section>
    {{-- Berita --}}

    {{-- Join --}}
 <section id="join"  class="py-5">
        <div class="container py-5">
            <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center">
                            <div class="stripe me-2"></div>
                            <h1>Daftar Santri</h1>
                        </div>
                    <h3 class="fw-bold mb-2">Gabung Bersama kami, mewujudkan generasi rabbani</h3>
                    <p class="mb-3">Pondok Pesantren Modern Al Hijrah adalah salah satu tempat 
                        untuk melahirkan generasi Islam yang ada di Kabupaten Ngawi, 
                        Jawa Timur, Indonesia.</p>
                    </div>
                     <div class="col-lg-6" data-aos="fade-up-left" data-aos-duration="1200">
                     <a class="image-link" href="{{ asset('images/li-join.png') }}" class="img-fluid" alt="joinimg">
                        <img src="{{ asset('images/li-join.png') }}" class="img-fluid" alt="joinimg">
                     </a>
                    </div>
                   
                </div>
                    <button  class="btn btn-outline-danger "  data-aos="flip-up" data-aos-duration="800" data-aos-easing="linier" >Register</button>
            </div>
        </div>         
</section>
    {{-- End Join --}}

    {{-- Video --}}
    <section id="video" class="py-5">
        <div class="container py-5">
            <div class="text-center">
                {{-- <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/wBZVrx-u3DI?si=YYvboP3VueBAcrKq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    
                </div> --}}
            </div>
        </div>
    
    </section>

    <section id="video_youtube py-5">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Video Kegiatan Pondok Pesantren</h2>
            </div>
             <div class="row py-5">
            {{-- <div class="col-lg-4">
                    <iframe width="100%" height="215" src="https://www.youtube.com/embed/wBZVrx-u3DI?si=YYvboP3VueBAcrKq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
              <div class="col-lg-4">
                    <iframe width="100%" height="215" src="https://www.youtube.com/embed/wBZVrx-u3DI?si=YYvboP3VueBAcrKq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
             <div class="col-lg-4">
                    <iframe width="100%" height="215" src="https://www.youtube.com/embed/wBZVrx-u3DI?si=YYvboP3VueBAcrKq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div> --}}
            
            <div class="footer-berita text-center">
                <a href="" class="btn btn-outline-danger">Video Lainnya</a>
            </div>
        </div>
        </div>
       
    </section>

    {{-- Foto --}}

    <section id="foto"  class="section-foto parallax">
        <div class="container">

           <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex align-items-center">
                    <div class="stripe-putih me-2"></div>
                    <h5 class="fw-bold text-white">Foto Kegiatan</h5>
                </div>
                <div>
                    <a href="/foto" class="btn btn-outline-info text-white">Foto Lainnya</a>
                </div>
           </div>

           <div class="row">
            <div class="col-lg-3 col-md-6 col-6">
                <a class="image-link" href="{{ asset('images/il-photo-01.png') }}">
                <img src="{{ asset('images/il-photo-01.png') }}" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
            <a class="image-link" href="{{ asset('images/il-photo-01.png') }}">
                    <img src="{{ asset('images/il-photo-02.png') }}" class="img-fluid" alt="">
                    </a>
            </div><div class="col-lg-3 col-md-6 col-6">
                <a class="image-link" href="{{ asset('images/il-photo-01.png') }}">
                    <img src="{{ asset('images/il-photo-03.png') }}" class="img-fluid" alt="">
                </a>
            </div>
           </div>
        </div>         
    </section>

    {{-- Fasilitas --}}

    <section id="fasilitas" class="py-5" >
     <div class="container py-5">
        <div class="text-center ">
            <h3 class="fw-bold">Fasilitas Pesantren</h3>
        </div>
        {{-- <div class="row py-5"> --}}

            {{-- <img src="{{ asset('/images/fasilitas.svg') }}"  class="img-fluid py-5" alt="fasilitas"> --}}
        
        {{-- </div> --}}
        <div class="footer-berita text-center">
            <a href="" class="btn btn-outline-danger">Fasilitas Lainnya</a>
        </div>
     </div>
    
    </section>

  @endsection
 

