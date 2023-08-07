<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// Admin
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminPengaduanController;
use App\Http\Controllers\Admin\TanggapanController;
// User
use App\Http\Controllers\User\PengaduanController;

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
    return redirect()->route('login');
});

Auth::routes();

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin/user/index', [UserController::class,'index'])->name('admin.user.index');
    Route::get('/admin/user/create', [UserController::class,'create'])->name('admin.user.create');
    Route::get('/admin/user/edit/{id}', [UserController::class,'create'])->name('admin.user.edit');
    Route::get('/admin/user/detail/{id}', [UserController::class,'show'])->name('admin.user.detail');
    Route::post('/admin/user/store', [UserController::class,'store'])->name('admin.user.store');
    Route::post('/admin/user/destroy/{id}', [UserController::class,'destroy'])->name('admin.user.destroy');

});

Route::group(['middleware' => ['role:admin|petugas']], function () {
    Route::get('/admin/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('/admin/pengaduan/index', [AdminPengaduanController::class,'index'])->name('admin.pengaduan.index');
    Route::get('/admin/pengaduan/detail/{id}', [AdminPengaduanController::class,'show'])->name('admin.pengaduan.detail');
    Route::post('/admin/tanggapan', [TanggapanController::class,'createOrUpdate'])->name('admin.tanggapan');

    // Cetak PDF
    Route::get('/admin/pengaduan/cetak', [AdminPengaduanController::class, 'cetak'])->name('admin.cetak');
});

Route::group(['middleware' => ['role:masyarakat']], function() {
    Route::get('/pengaduan/dashboard', [PengaduanController::class,'index'])->name('pengaduan.dashboard');
    Route::get('/pengaduan/detail/{id}', [PengaduanController::class,'show'])->name('pengaduan.detail');
    
    Route::get('/pengaduan/ajukan_pengaduan', [PengaduanController::class,'create'])->name('pengaduan.create');
    Route::post('/pengaduan/tambah_pengaduan', [PengaduanController::class,'store'])->name('pengaduan.store');
});
