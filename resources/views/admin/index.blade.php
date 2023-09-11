@extends('layouts.layouts')
 @section('title')
  Dashboard
 @stop 

@section('content')
   <section class="py-5" style="margin-top: 100px;">
    <div class="container col-xxl-8 py-5">
        <h3 class="fw-bold mb-3">Dashboard admin</h3>

        <div class="row row-cols-1 row-cols-lg-3 g-4">
            @forelse ($artikels as $artikel)
                <div class="col" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="linear" data-aos-duration="1200">
                    <div class="card border-0">
                        <img src="{{ asset('storage/artikel/' . $artikel->image) }}" class="card-img-top" alt="{{ $artikel->judul }}" style="height: 100%;">
                        <div class="card-body" style="height: 100%;">
                            <p class="fw-bold mb-3 text-secondary">{{ $artikel->created_at }}</p>
                            <h4 class="card-title">{{ $artikel->judul }}</h4>
                            <p class="card-text text-secondary">{{ $artikel->slug }}</p>
                            <a href="{{ route('blog.show', ['id' => $artikel->id])  }}" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-12">
                    <p>Tidak ada artikel yang tersedia.</p>
                </div>
            @endforelse
        </div>
        <br>
        <br>
        <div>
            <a href="{{ route('dashboard.create') }}" type="button" class="btn btn-primary btn-sm" name="btn-add">Tambah Pengguna</a>
        </div>
        <h2>Data Pengguna</h2>
        <table class="table table-bordered table-responsive-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
            @php
                $no = 1;
            @endphp
                @foreach ($users as $user)
                    <tr>
                        <td> @php
                            echo $no++;
                        @endphp</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>


@endsection