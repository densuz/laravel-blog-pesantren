@extends('layouts.layouts')

@section('content')
    <h1>Galeri Foto</h1>
    <section id="foto"  class="section-foto PY-5" style="margin-top: 100px;">
        <div class="container">

           <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex align-items-center">
                    <div class="stripe-merah me-3"></div>
                    <h5 class="fw-bold text-dark ">Foto Kegiatan Pesantren</h5>
                </div>
                <div>
                    <a href="/foto" class="btn btn-outline-info text-dark ">Foto Lainnya</a>
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
@endsection