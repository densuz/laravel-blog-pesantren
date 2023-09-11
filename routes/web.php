<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Models\Blog;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// BERITA
Route::get('/berita', function () {
    return view('berita.berita');
});
// Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');

Route::get('/detail', function () {
    return view('berita.detail');
});

Route::get('/foto', function () {
    return view('foto.foto');
});

Route::get('/login', function () {
    return view('auth.login');
});

// Register route
// Route::post("/register", [RegisterController::class, 'register']);

// create middleware
// Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/login', [AuthController::class, 'authenticate']);
// Route::post('/logout', [AuthController::class, 'logout']);

// Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard')->middleware('auth');


// Rute Autentikasi
Route::middleware(['guest'])->group(function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'authenticate']);
});






Route::post('logout', [AuthController::class, 'logout']);

// Rute Dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('blog', [BlogController::class, 'index'])->name('blog');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


    // Blog
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog/store',[BlogController::class,'store'])->name("blog.store");

    // memaksa untuk id hnya berupa angka gunakan kondisi ini 
    Route::delete("/blog/{id}",[BlogController::class,"destroy"])->name("blog.destroy")->where(["id"=>"[0-9]+"]); 
    Route::get("/blog/{id}/edit",[BlogController::class,"edit"])->name("blog.edit");
    Route::put("/blog/{id}/update",[BlogController::class,"update"])->name("blog.update");

    // Route::delete("/blog/{id}",[BlogController::class,"destroy"])->name("blog.hapus");
    // Route::get("/blog/{slug}",[BlogController::class,"show"])->whereNumber("id")->name("blog.lihat");

    // Route::get('/blog/{id}', [DashboardController::class,"show"])->name("dashboard.show");

    Route::get('admin/create/users', [DashboardController::class, "create"])->name("dashboard.create");
    Route::post('admin/create/done', [DashboardController::class, "store"])->name("dashbord.store");

    
});

    Route::get("/blog/{id}/show",[BlogController::class,"show"])->name("blog.show");

Route::get('/berita',[BeritaController::class,'index'])->name('berita');
    