<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SosialMediaController;

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
// routes/web.php



Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/service', function () {
    return view('service');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/dokumentasi', function () {
    return view('dokumentasi');
});
Route::get('/tentang-kami', function () {
    return view('about');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/hubungi-kami', [SosialMediaController::class, 'directLink'])->name('kontak');
