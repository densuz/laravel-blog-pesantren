
@extends('layouts.layouts')
@section('title')
Edit Artikel
    
@endsection

@section('content')
    <section class="py-5" style="margin-top:100px;">

    <div class="container col-xxl-8 py-5">
        <h4 class="fw-bold mb-3">Edit Artikel </h4>
        <a href="{{ route('blog') }}" class="btn btn-secondary">Kembali</a>
        <form action="{{ route('blog.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Ini diperlukan untuk menunjukkan bahwa ini adalah metode PUT (update) -->

    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
       <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul', $artikel->judul) }}">
    @error('judul')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <div class="mb-3">
        <label for="image" class="form-label">Gambar</label>
        <input type="file" class="form-control @error('judul') is-invalid @enderror" id="image" name="image" value="{{ old('image',$artikel->image) }}">
    </div>

    <div class="mb-3">
        <label for="desc" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="desc" name="desc">{{ $artikel->desc }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
</form>

    </div>
    
    </section>
@endsection