@extends('layouts.layouts')

@section('title')
    Login
@stop

@section('content')
    {{-- Login Page --}}
    <section style="margin-top: 100px">
    <div class="container py-5 col-xxl-6"> 
        <h3 class="fw-bold mb-3">Login</h3>

         <form action="/login" method='POST'>
             {{ csrf_field() }}
            <div class="form-group mb-3">
                <label for="email"> Masukan Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="password"> Masukan Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mt-4 w-25 ">Login</button>
        </form>
    </div>
    
    </section>
@endsection