<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SertifikasiController;
use App\Http\Controllers\UjianSertifikasiController;
use App\Http\Controllers\PelaksanaanTrainingController;
use App\Http\Controllers\PendaftaranTrainingController;
use App\Http\Controllers\PendaftaranSertifikasiController;

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

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', DashboardController::class);

    Route::resource('/data-karyawan', UserController::class);

    Route::resource('/data-training', TrainingController::class);

    Route::resource('/data-sertifikasi', SertifikasiController::class);

    Route::get('/pendaftaran-training', [PendaftaranTrainingController::class, 'index']);
    Route::put('/pendaftaran-training/accept/{id}', [PendaftaranTrainingController::class, 'accept']);
    Route::put('/pendaftaran-training/reject/{id}', [PendaftaranTrainingController::class, 'reject']);

    Route::get('/pendaftaran-sertifikasi', [PendaftaranSertifikasiController::class, 'index']);
    Route::put('/pendaftaran-sertifikasi/accept/{id}', [PendaftaranSertifikasiController::class, 'accept']);
    Route::put('/pendaftaran-sertifikasi/reject/{id}', [PendaftaranSertifikasiController::class, 'reject']);

    Route::get('/pelaksanaan-training', [PelaksanaanTrainingController::class, 'index']);

    Route::get('/ujian-sertifikasi', [UjianSertifikasiController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
