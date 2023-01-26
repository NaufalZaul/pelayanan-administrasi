<?php

use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\LoginUsers;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\RegistrasiUsers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('Main.Menu.beranda');
});

Route::get('/login', [LoginUsers::class, 'index'])
    ->name('login');

Route::post('login', [LoginUsers::class, 'loginAuth'])
    ->name('login.users');

Route::post('registrasi', [RegistrasiUsers::class, 'registrasiAuth'])
    ->name('registrasi.users');

Route::get('/registrasi', [RegistrasiUsers::class, 'index']);

Route::get('/artikel', function () {
    return view('Main.Menu.artikel');
});

Route::get('/persyaratan', function () {
    return view('Main.Menu.persyaratan');
});

Route::get('/alur', function () {
    return view('Main.Submain.alur');
});

Route::get('/formulir-pendaftaran/{name}', function () {
    return view('Main.Forms.form');
});

Route::get('/form', [DataPendudukController::class, 'home'])->name('form');
Route::post('form', [DataPendudukController::class, 'input'])->name('input');
Route::get('/print-surat/{nama}', [PrintController::class, 'print']);

// Route::get('/', function () {
//     return view('Profile.profile');
// });
