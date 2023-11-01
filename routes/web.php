<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardLemburController;
use App\Http\Controllers\DashboardSuperController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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