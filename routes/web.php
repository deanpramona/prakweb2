<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
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

Route::get('/salam', function () {
    return "Selamat Siang Pa Rojul";
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/me', function () {
    return view('about', [
        // membuat array assosiatif dan dikirim ke views
        "nama" => "Dean Pramona",
        "umur" => 18,
        "email" => "dean@gmail.com"
    ]);

});

Route::get('/nf', function () {
    return view('nf', [
        // membuat array assosiatif dan dikirim ke views
        "nama" => "Sekolah Tinggi Teknologi Terpadu Nurul Fikri",
        "alamat" => "Jakarta Selatan",
        "email" => "nurulfikri@gmail.com"
    ]);

});

Route::get('/home', function () {
    return view('home');
});

Route::get('/form', function () {
    return view('form');
});


Route::get('/input', [InputController::class, 'index']);

Route::post('/output', [InputController::class, 'output']);

Route::post('/form', [FormController::class, 'index']);
Route::post('/form', [FormController::class, 'form']);

// Route::post('/form', function(){
//     return view('form');
// });



// ini route untuk backend atau admin
Route::prefix('admin')->group(function() {
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/kategoriproduk', [KategoriProdukController::class, 'index']);
Route::get('/pesanan', [PesananController::class, 'index']);
});

// ini route untuk frontend atau user
Route::prefix('frontend')->group(function() {
    Route::get('/dashboard', [FrontendController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);
    });