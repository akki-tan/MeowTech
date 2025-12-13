<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Article;
use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::post('/cek', [UserController::class, 'cek']);
Route::post('/simpan', [UserController::class, 'simpan']);

Route::get('/buatakun', function () {
    return view('buatakun');
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Adi Suryadi']);
});

Route::get('/admin/artikel', function () {
    return view('tambahartikel', [
        'title'    => 'Kelola Artikel',
        'articles' => Article::all(),
    ]);
});

Route::post('/admin/artikel', [UserController::class, 'storeArtikel']);
Route::get('/admin/artikel/edit/{id}', [UserController::class, 'editArtikel']);
Route::post('/admin/artikel/update/{id}', [UserController::class, 'updateArtikel']);
Route::post('/admin/artikel/delete/{id}', [UserController::class, 'deleteArtikel']);

Route::get('/admin/produk', [ProductController::class, 'adminProduk']);
Route::post('/admin/produk', [ProductController::class, 'store']);
Route::get('/admin/produk/edit/{id}', [ProductController::class, 'edit']);
Route::post('/admin/produk/update/{id}', [ProductController::class, 'update']);
Route::post('/admin/produk/delete/{id}', [ProductController::class, 'delete']);

Route::get('/artikel', function () {
    return view('artikel', [
        'title'    => 'Cari Tahu Tentang Kucing Yuk',
        'articles' => Article::all(),
    ]);
});

Route::get('/toko', [ProductController::class, 'show']);

Route::get('/shelter', function () {
    return view('shelter', [
        'title' => 'Mau Adopsi? Ini beberapa shelter yang terdapat di lokasimu!',
    ]);
});

Route::get('/konsul', function () {
    return view('konsul', [
        'title' => 'Biarkan Pihak Ahli Membantumu!^^',
    ]);
});

Route::get('articles/{article:slug}', function (Article $article) {
    $others = Article::where('id', '!=', $article->id)
        ->latest()
        ->take(3)
        ->get();

    return view('Sartikel', [
        'title'   => $article->title,
        'article' => $article,
        'others'  => $others,
    ]);
});
