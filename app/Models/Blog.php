<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];


    // protected $fillable = ['judul', 'konten', 'gambar'];

    // Aturan validasi untuk membuat artikel baru
    // public static $rules = [
    //     'judul' => 'required|string|max:255',
    //     'konten' => 'required|string',
    //     'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan
    // ];
}
