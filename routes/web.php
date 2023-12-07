<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardLemburController;
use App\Http\Controllers\DashboardImageController;
use App\Http\Controllers\DashboardSuperController;
use App\Http\Controllers\PrintLemburController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GambarController;
use App\Http\Controllers\PdfControllerSuper;

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
    return view('home');
});

Route::get('/sweat', function () {
    return view('cobasweat');
});

Route::get('/latihan', function () {
    return view('latihan');
});

Route::get('/latgam', function () {
    return view('latgam');
});
Route::post('/tamgam', [GambarController::class, 'store'])->middleware('auth');;

// halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

// halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/lembur', DashboardLemburController::class);
Route::resource('/dashboard/super', DashboardSuperController::class);

// menghapus lembur
Route::get('/dashboard/lembur/{lembur:id}/hapus', [DashboardLemburController::class, 'destroy'])->middleware('auth');

//image lembur
Route::get('/dashboard/lembur/{lembur:id}/image', [DashboardImageController::class,'index'])->middleware('auth');

//tambah image lembur
Route::put('/dashboard/lembur/{lembur:id}/addimag', [DashboardImageController::class,'store'])->middleware('auth');

// print lembur
Route::get('/dashboard/lembur/{lembur:id}/print', [PrintLemburController::class, 'index']);

// route pdf
Route::get('/dashboard/super/{supel:id}/print', [PdfControllerSuper::class, 'index']);
