<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
     {
        return view('admin.index', [
            'artikels' => Blog::all(),
            'users' => User::all()
        ]);
    }


    public function create()
    {
        return view('admin.form_addusers');
    }

    public function store(Request $request)
    {
       $request->validate([
        'name' => ['required', 'min:3'],
        'email' => ['required', 'email', 'unique:users', 'min:8'],
        'password' => ['required', 'min:6'],
    ], [
        'name.required' => 'Nama tidak boleh kosong.',
        'name.min' => 'Nama harus memiliki setidaknya 3 karakter.',
        'email.required' => 'Email tidak boleh kosong.',
        'email.email' => 'Email harus berupa alamat email yang valid.',
        'email.unique' => 'Email sudah digunakan.',
        'email.min' => 'Email harus memiliki setidaknya 8 karakter.',
        'password.required' => 'Password tidak boleh kosong.',
        'password.min' => 'Password harus memiliki setidaknya 6 karakter.',
    ]);

    try {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Encrypt password
        ]);

        // Redirect with success message
        // session()->flash('success', 'User berhasil ditambahkan.');
         return redirect()->route('dashboard');
        // return redirect()->route('admin.index')->with('success', 'User berhasil ditambahkan.');
    } catch (\Throwable $th) {
        // Handle exception, misalnya dengan menampilkan pesan error
        // return back()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        session()->flash('error', 'Terjadi kesalahan. Silakan coba lagi.');

        // return back();
         return redirect()->route('dashboard.create');

    }




    }

    
}