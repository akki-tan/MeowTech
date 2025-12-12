<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Article;

Route::get('/admin/artikel', function () {
    $articles = Article::all();
    return view('admin', [
        'title' => 'Kelola Artikel',
        'articles' => $articles
    ]);
});

Route::post('/admin/artikel', [UserController::class, 'storeArtikel']);
Route::get('/admin/artikel/edit/{id}', [UserController::class, 'editArtikel']);
Route::post('/admin/artikel/update/{id}', [UserController::class, 'updateArtikel']);
Route::post('/admin/artikel/delete/{id}', [UserController::class, 'deleteArtikel']);


Route::get('/', function () {
    return view('login');
});
Route::get('/login', function () {
    return view('login');
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
Route::get('/artikel', function () {
    return view('artikel', ['title' => 'Cari Tahu Tentang Kucing Yuk', 'articles' => Article::all()]);
});
Route::get('/toko', function () {
    return view('toko', ['title' => 'Lengkapi Kebutuhan Anabulmu!']);
});
Route::get('/shelter', function () {
    return view('shelter', ['title' => 'Mau Adopsi? Ini beberapa shelter yang terdapat di lokasimu!']);
});
Route::get('/konsul', function () {
    return view('konsul', ['title' => 'Biarkan Pihak Ahli Membantumu!^^']);
});
Route::get('articles/{article:slug}', function (Article $article) {
    $others = Article::where('id', '!=', $article->id)->latest()->take(3)->get();
    return view('Sartikel', ['title' => $article->title,'article' => $article,'others' => $others]);
});

