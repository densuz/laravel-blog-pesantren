<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.index', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        // Validasi input dari formulir
        $rules = [
            'judul' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
            'desc' => 'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib di isi',
            'image.required' => 'Gambar Tidak boleh lebih dari 1MB. format gambar yang di dukung: jpg,jpeg,png,webp',
            'desc.required' => ' Deskripsi wajib di isi',
        ];

        $this->validate($request, $rules, $messages);

        try {
            // rename nama gambar
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/artikel', $fileName);

            // artikel
            $storage = "storage/content-artikel";
            $dom = new \DOMDocument();

            # Menonaktifkan kesalahan libxml standar
            libxml_use_internal_errors(true);
            $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
            libxml_clear_errors();

            // Proses unggah image
            $images = $dom->getElementsByTagName('img');

            // Buat artikel baru dalam database
            foreach ($images as $img) {
                $src = $img->getAttribute('src');
                if (preg_match('/data:image/', $src)) {
                    preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                    $mimetype = $groups['mime'];
                    $fileNameContent = uniqid();
                    $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                    $filePath = ("$storage/$fileNameContentRand.$mimetype");
                    $image = Image::make($src)->resize(1440, 720)->encode($mimetype, 100)->save(public_path($filePath));
                    $new_src = asset($filePath);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $new_src);
                    $img->setAttribute('class', 'img-responsive');
                }
            }


            Blog::create([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul, '-'),
                'image' => $fileName,
                'desc' => $request->desc,
                // 'desc' => $dom->saveHTML(),
            ]);

            Session::flash('success', 'Data berhasil disimpan');
        } catch (\Exception $e) {
            Session::flash('error', 'Data gagal disimpan');
        }

        return redirect(route('blog'));
    }


    public function edit($id)
{
    // Mengambil data artikel berdasarkan ID
    $artikel = Blog::find($id);

    // Cek apakah artikel ditemukan
    if (!$artikel) {
        return redirect(route('blog'))->with('error', 'Artikel tidak ditemukan');
    }

    // Mengirim data artikel ke view edit
    return view('admin.blog.edit', compact('artikel'));
}



    public function update(Request $request, $id)
{
    $artikel = Blog::findOrFail($id);

    $rules = [
        'judul' => 'required',
        'image' => 'nullable|image|max:1000|mimes:jpg,jpeg,png,webp',
        'desc' => 'required|min:20',
    ];

    $messages = [
        'judul.required' => 'Judul wajib di isi',
        'image.image' => 'Berkas yang diunggah harus berupa gambar.',
        'image.max' => 'Ukuran gambar tidak boleh lebih dari 1MB.',
        'image.mimes' => 'Format gambar yang didukung adalah jpg, jpeg, png, dan webp.',
        'desc.required' => 'Deskripsi wajib di isi',
        'desc.min' => 'Deskripsi harus memiliki setidaknya 20 karakter.',
    ];

    $this->validate($request, $rules, $messages);

    // Menghapus gambar lama jika ada
    if (Storage::exists($artikel->image)) {
        Storage::delete($artikel->image);
        // $oldImagePath = 'public/artikel/' . $artikel->image;
    //    if (Storage::exists($oldImagePath)) {
    //    }
    }

    // Perbarui data artikel
    $artikel->update([
        'judul' => $request->input('judul'),
        'desc' => $request->input('desc'),
    ]);

    // Jika ada gambar yang diunggah, simpan gambar yang baru
    if ($request->hasFile('image')) {
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/artikel', $fileName);
        $artikel->update(['image' => $fileName]);
    }

    return redirect(route('blog'))->with('success', 'Data berhasil diperbarui');
}

    public function destroy($id)
    {
        // Mengambil data artikel berdasarkan ID
        $artikel = Blog::find($id);

        // Hapus gambar terkait (opsional)
        if ($artikel->image) {
            Storage::disk('public')->delete($artikel->image);
        }

        // Hapus artikel dari database
        $artikel->delete();

        // Redirect kembali ke halaman yang sesuai
        return redirect()->route('blog');
    }


    // blog detail show berdasarkan id
    public function show($id)
    {
        $artikel = Blog::findOrFail($id);
        return view('admin.blog.show',['artikel' => $artikel]);
    }
}
