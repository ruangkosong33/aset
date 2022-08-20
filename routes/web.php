<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KodeController;
use App\Http\Controllers\SpesifikasiController;
use App\Http\Controllers\RuangController;

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



Auth::routes();

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

//Ruang Controller
Route::get ('/ruang',[RuangController::class, 'index'])->name('ruang.index');
Route::get ('/ruang/create', [RuangController::class, 'create'])->name('ruang.create');
Route::post ('/ruang', [RuangController::class, 'store'])->name('ruang.store');
Route::get ('/ruang/show/{id}', [RuangController::class, 'show'])->name('ruang.show');
Route::get ('/ruang/edit/{id}', [RuangController::class, 'edit'])->name('ruang.edit');
Route::put ('/ruang/{id}', [RuangController::class, 'update'])->name('ruang.update');
Route::delete ('/ruang/{id}', [RuangController::class, 'destroy'])->name('ruang.destroy');
Route::get ('/ruang/search',[RuangController::class, 'search'])->name('ruang.search');

//Kode Controller
Route::get ('/kode',[KodeController::class,'index'])->name('kode.index');
Route::get ('/kode/create',[KodeController::class, 'create'])->name('kode.create');
Route::post ('/kode',[KodeController::class, 'store'])->name('kode.store');
Route::get ('/kode/show/{id}',[KodeController::class, 'show'])->name('kode.show');
Route::get ('/kode/edit/{id}',[KodeController::class, 'edit'])->name('kode.edit');
Route::put ('/kode/{id}',[KodeController::class, 'update'])->name('kode.update');
Route::delete ('/kode/{id}',[KodeController::class, 'destroy'])->name('kode.destroy');
Route::get ('/kode/search',[KodeController::class, 'search'])->name('kode.search');

//Spesifikasi Controller
Route::get ('/spec',[SpesifikasiController::class,'index'])->name('spec.index');
Route::get ('/spec/create',[SpesifikasiController::class, 'create'])->name('spec.create');
Route::post ('/spec',[SpesifikasiController::class, 'store'])->name('spec.store');
Route::get ('/spec/show/{id}',[SpesifikasiController::class, 'show'])->name('spec.show');
Route::get ('/spec/search',[SpesifikasiController::class, 'search'])->name('spec.search');
Route::get ('/spec/edit/{id}',[SpesifikasiController::class, 'edit'])->name('spec.edit');
Route::put ('/spec/{id}',[SpesifikasiController::class, 'update'])->name('spec.update');
Route::delete ('/spec/{id}',[SpesifikasiController::class, 'destroy'])->name('spec.destroy');
Route::get ('/exportpdf', [SpesifikasiController::class, 'exportpdf'])->name('exportpdf');




