<?php

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