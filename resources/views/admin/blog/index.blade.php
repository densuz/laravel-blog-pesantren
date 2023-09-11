@extends('layouts.layouts')

@section('title')
List Artikel Blog
    
@endsection

@section('content')
    <section class="py-5" style="margin-top:100px;">

    <div class="container col-xxl-8 py-5">
        <h4 class="fw-bold mb-3">List Blog Artikel</h4>

        
       
        {{-- Button Create Article  --}}
        <a href="{{ route("blog.create") }}" type="button" class="btn btn-primary my-2">Create Article</a>

        @if(session('success'))
           <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session('error'))
           <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        {{-- Table List Articles  --}}
        {{-- <table id="example" class="display table table-striped table-bordered dt-responsive nowrap w-100" >
        <thead>
        <tr align='center'> --}}
        {{--            <th scope="col">#</th>--}}
        {{--                <th scope="col">Title</th>--}}
        {{--        <th scope="col">Content</th>--}}
        {{--        <th scope="col">Image</th>--}}
        {{--        <th scope="col">Action</th>--}}
        {{--        </tr>--}}
        {{--        @foreach($blogs as $key => $value)--}}
        {{--                    <td>{{ ++$i }}</td>--}}
        {{--                        <td>{{$value->title}}</td>--}}
        {{--                            <td>{!! Str::limit(strip_tags ($value->content), '70', '...') !!}</td>--}}
        {{--                            <td>{!! Str::limit(strip_tags ($value->content),60,'...') !!}</td>--}}
        {{--                            <td>{!! Str::limit(strip_tags ($value->content),7,'...') !!}</td>--}}
        {{--                                <img src="{{$value->image}}" alt="" width="60">--}}
        {{--                                        <form action="{{route ('blog.destroy', ['id' =>$value -> id])}}" method = "post">--}}
        {{--                                    <form action="{{route ('blog.destroy', ['id' =>$value ->id])}} " method = 'POST'>--}}
        {{--                                        <form action="/blog/{{$value->id}}/delete" method="post">--}}
        {{--                                    <form action="{{route ('blog.destroy',[$value])}}" method="POST">--}}
        {{--                                    <td><form action="/blog/{{$value->id}}/delete" method="POST">@csrf<input name="_method" value="DELETE
        {{--                                    <td><form action="/blog/{{$value->id}}/edit"><input name="_method" value="EDIT" hidden=""><button class="
        {{--                                        <form action="/blog/{{$value->id}}/delete" method="post">--}}
        {{--                                    <form action="/admin/blog/{{$value->id}}/delete" method="post">--}}
        {{--                                        <form action="{{route ('blog.destroy', ['id' =>$value ->id])}} " method ="post">--}}
        {{--                                    <form action="/blog/{{$value->id}}/delete" method="post">--}}
        {{--                                        {{csrf_field()}}--}}
        {{--                                            <input name="_method" value="DELETE" hidden/>--}}
        {{--                                                <button onclick="return confirm('Are you sure?')" type="submit" class="badge bg-danger"><span data-feather="
        {{--                                                <button onclick="return confirm('Are you sure?')" type="submit" class="badge bg-danger border-0"><span data
        {{--                                                    <button onclick="return confirm('Are you sure?')" type="submit" class="badge bg-danger border-0"><span data
        {{--                                                    <button onclick="return confirm ('Yakin ingin menghapus data?')" class="btn btn-danger"><span><svg xmlns
        {{--                                                <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger"><span data-feather="
        {{--                                                    <button onclick="return confirm('Are you sure?')" class="btn btn-danger"><span><svg xmlns="http://www.
        {{--                                                <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger"><span><svg xmlns="
        {{--                                                <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger"><span><i class="
        {{--                                                <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger"><span><svg xmlns="
        {{--                                                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger"><span><svg xmlns="
        {{--                                                <button onclick="return confirm('Are you sure?')" type="submit" class="badge bg-danger border-0"><span data
        {{--                                                    <button onclick="return confirm('Are you sure?')" type="submit" class="badge badge-danger"><span data-feather="
        {{--                                                <button onclick="return confirm ('Apakah Anda Yakin Ingin Menghapus Data ?')" type="submit" class
        {{--                                                <a href="/blog/{{$value->id}}/edit"><span data-feather="edit"></span></a>&nbsp;--}}
        {{--                                                <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger"><span><svg xmlns="
        {{--                                                    <button onclick="return confirm('Are you sure?')" type="submit" style="background: none; border:none;">--}}
        {{--                                                <button onclick="return confirm('Are you sure?')" type="submit" class="badge bg-danger border-0"><span data
        {{--                                                <div style="text-align: center;">--}}
        {{--                                                    <button onclick="return confirm('Are you sure?')" type="submit"><span><i class="fa fa-trash"></i></
        {{--                                                    <span><button onclick="return confirm('Are you sure?')" type="submit"><svg xmlns="http://www.w3.
        {{--                                                    <button type="submit"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox
        {{--                                                    <button type="submit"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox
        {{--                                                    <button type="submit"><span class="glyphicon glyphicon-trash"></span></button>--}}
        {{--                                                    --}}{{----}}
        {{--                                                        <button type="submit"><span class="glyphicon glyphicon-trash"></span></button>--}}
        {{--                                                        <a href="{{route('blog.edit',$value->id)}}" class="btn btn-primary"><span><i class="fa fa
        {{--                                                        <a href="{{route('blog.edit',$value->id)}}" class="btn btn-primary"><span><i class="fa fa 
        {{--                                                        <button type="submit"><span class="glyphicon glyphicon-trash"></span></button>--}}
        {{--                                                        <button type="submit"><span class="fa fa-trash"></span></button>--}}
        {{--                                                        <a href="{{route('blog.edit',$value->id)}}" class="btn btn-primary">Edit</a> |--}}
        {{--                                                        <button type="submit">Delete</button>--}}
        {{--                                                            </a>  |   <a href="{{route('edit',$value->id)}}">Edit</a></h3>--}}
        {{--                                                            </a>  &nbsp;--}}
        {{--                                                                        @if($value->status ==1)--}}
        {{-- @endsection --}}
<div class="table-responsive py-3">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Judul</th>
                <th>Slug</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @forelse ($artikels as $artikel)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>
                        <img src="{{ asset('storage/artikel/' . $artikel->image) }}" height="100" alt="">
                    </td>
                    <td>{{ $artikel->judul }}</td>
                    <td>{{ $artikel->slug }}</td>
                    <td class="text-truncate" style="max-width: 150px;">{{ $artikel->desc }}</td>
                   <td>
                <a href="{{ route('blog.show', ['id' => $artikel->id]) }}" class="btn btn-success btn-sm">Baca</a>

                <!-- Tombol Edit -->
                <a href="{{ route('blog.edit', ['id' => $artikel->id]) }}" class="btn btn-info btn-sm">Edit</a>
                
                <!-- Tombol Hapus (dalam bentuk form untuk keamanan) -->
                <form action="{{ route('blog.destroy', ['id' => $artikel->id]) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-warning btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus</button>
                </form>
            </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Tidak ada data artikel.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>



        {{-- <div class="d-flex">
            <a href="{{ route('dashboard') }}">Home</a>
            <div class="mx-1"></div>
            <a href="{{ route('dashboard') }}">Blog Artikel</a>
        </div> --}}



    </div>
    
    </section>
@endsection

