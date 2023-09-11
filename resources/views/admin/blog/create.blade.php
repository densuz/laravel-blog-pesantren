
@extends('layouts.layouts')

@section('content')
    <section class="py-5" style="margin-top:100px;">

    {{-- <div class="container col-xxl-8 py-5"> --}}
     {{-- <div class="d-flex"> --}}
        {{-- Navigasi --}}
        {{-- <a href="{{ route('blog') }}">Blog</a> --}}
        {{-- <div class="mx-1"> . </div> --}}
        {{-- <a href="">Buat artikel</a> --}}
        {{-- </div> --}}
        {{-- <h4 class="fw-bold mb-3">Page Create artikel </h4> --}}

    {{-- </div> --}}
    <div class="container col-xxl-8 py-5">
    <div class="d-flex">
        {{-- Navigasi --}}
        <a href="{{ route('blog') }}">Kembali</a>
        <div class="mx-1"> . </div>
        {{-- <a href="{{ route('blog.create') }}">Buat artikel</a> --}}
    </div>
    <h4 class="fw-bold mb-3">Page Create Artikel</h4>

    {{-- Form Create Artikel --}}
    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control @error('judul') @enderror"  id="judul" name="judul" value="{{ old('judul') }}" >
            @error('judul')
                <div class="text-danger">
                    {{ $message }}

                </div>
            @enderror
        </div>


        {{-- <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" >
        </div> --}}

        <div class="mb-3">
            <label for="desc" class="form-label">Deskripsi</label>
            <textarea class="form-control  @error('desc') @enderror" id="desc" name="desc" rows="6"  > {{ old('desc') }}</textarea>
            {{-- <textarea class="form-control  @error('desc') @enderror" id="summernote" name="desc" rows="6"  > {{ old('desc') }}</textarea> --}}
             @error('desc')
                <div class="text-danger">
                    {{ $message }}
                    
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input type="file" class="form-control  @error('image') @enderror" id="image" name="image" accept="image/*" {{ old('desc') }} >
             @error('image')
                <div class="text-danger">
                    {{ $message }}
                    
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Buat Artikel</button>
    </form>
</div>

    
    </section>
@endsection