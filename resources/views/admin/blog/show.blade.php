@extends('layouts.layouts')

@section('title')
    {{ $artikel->judul }}
@endsection

@section('content')
    <section class="py-5" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <img src="{{ asset('storage/artikel/' . $artikel->image) }}" class="img-fluid" alt="Artikel Image">
                <h3 class="mt-3">{{ $artikel->judul }}</h3>
                <p>Posting at {{ $artikel->created_at }}</p>
                <p class="text-justify" style="padding-left: 20px;">{{ $artikel->desc }}</p> <!-- Mengatur padding kiri -->
            </div>
        </div>
    </section>
    
    <!-- Pengaturan margin bawah untuk elemen footer -->
    <style>
        footer {
            margin-top: 50px; /* Sesuaikan jarak sesuai kebutuhan */
        }
    </style>
@endsection
