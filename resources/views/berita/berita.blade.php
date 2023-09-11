@extends('layouts.layouts')

 @section('title')
Berita
 @stop

@section('content')
    <h1>Daftar berita</h1>

     <section id="berita" class="py-5" style="margin-top: 100px;" >
    <div class="container">


       <div class="header-berita text-center">
            <h2 class="fw-bold"> Berita Kegiatan Pondok Pesantren</h2>
       </div>

       <div class="row py-5">

       @forelse($berita as $beritas)
    <div class="col-lg-4" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="linear" data-aos-duration="1200">
        <div class="card border-0">
            <img src="{{ asset('storage/artikel/' . $beritas->image) }}" class="img-fluid" alt="">
            <div class="konten-berita">
                <p class="text-secondary">{{ $beritas->created_at }}</p>
                <h4 class="fw-bold ">
                    <a href="{{ route('blog.show', ['id' => $beritas->id]) }}" class="text-decoration-none text-dark">{{ $beritas->judul }}</a>
                </h4>
                <p class="text-secondary">#pesantrenmodern</p>
                <a href="{{ route('blog.show', ['id' => $beritas->id]) }}" class="text-decoration-none text-danger">Selengkapnya</a>
            </div>
        </div>
    </div>
@empty
    <!-- Tidak ada berita yang tersedia. -->
@endforelse

 
        
             {{-- <div class="col-lg-4" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="linear" data-aos-duration="1200">
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
            </div> --}}
            
       </div>

       {{-- @foreach ($berita as $item) --}}
           {{-- <div class="row py-5"> --}}
            {{-- <div class="col-lg-4" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="linear" data-aos-duration="1200">
                <div class="card border-0">
                    <img src="{{ asset('storage/artikel' . $item->image) }}" class="img-fluid"  alt="">
                    <div class="konten-item">
                        <p class="fw-bold mb-3 text-secondary">{{ $item->created_at }}</p>
                        <h4>{{ $item->judul }}</h4>
                        <p class="text-secondary">#pesantrenmodern</p>
                        <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div> --}}

       {{-- </div>
       @endforeach --}}
      

       <div class="footer-berita text-center">
            <a href="" class="btn btn-outline-danger">berita Lainnya</a>
       </div>


    </div>
    </section>
    {{-- berita --}}
@endsection
