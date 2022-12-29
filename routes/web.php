<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/admin/dashboard', DashboardController::class);

Route::get('/admin/data-karyawan', [UserController::class, 'index']);
Route::get('/admin/data-karyawan/create', [UserController::class, 'create']);

Route::get('/admin/data-training', function () {
    return view('admin.data-training.index');
});

Route::get('/admin/data-sertifikasi', function () {
    return view('admin.data-sertifikasi.index');
});

Route::get('/admin/pendaftaran-training', function () {
    return view('admin.pendaftaran-training.index');
});

Route::get('/admin/pendaftaran-sertifikasi', function () {
    return view('admin.pendaftaran-sertifikasi.index');
});

Route::get('/admin/pelaksanaan-training', function () {
    return view('admin.pelaksanaan-training.index');
});

Route::get('/admin/ujian-sertifikasi', function () {
    return view('admin.ujian-sertifikasi.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
