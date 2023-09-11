@extends('layouts.layouts')

@section('title')

@stop

@section('content')
    
    <section  id="register" class="py-5" style="margin-top: 100px;" >
        <div class="container">
            <div class="header-berita text-center">
                <h2 class="fw-bold"> Pendaftaran Santri Baru</h2>
                <p>{{ now() }}</p>

            </div>

            {{-- <form action="{{ route('store_santri') }}" method="POST" enctype="multipart/form-data"> --}}

        <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" required>
    </div>
     @error('nama')
            <div class="alert alert-success" role="alert">{{ $messages }}</div>
        @enderror
    <button type="submit" class="btn btn-primary">Daftar</button>
</form>

    </div>
    </section>
@endsection