<?php

use App\Http\Controllers\DetailServiceController;
use App\Http\Controllers\JnsKendaraanController;
use App\Http\Controllers\JnsServiceController;
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
    return view('dashboard');
});

//route jnskendaraan
Route::get('/jnskendaraan', [JnsKendaraanController::class, 'index'])->name('jnsKendaraan.index');
Route::get('/jnskendaraan/add', [JnsKendaraanController::class, 'create'])->name('jnsKendaraan.create');
Route::post('/jnskendaraan/add', [JnsKendaraanController::class, 'store'])->name('jnsKendaraan.store');
Route::get('/jnskendaraan/edit/{id}', [JnsKendaraanController::class, 'edit'])->name('jnsKendaraan.edit');
Route::post('/jnskendaraan/edit/{id}', [JnsKendaraanController::class, 'update'])->name('jnsKendaraan.update');
Route::get('/jnskendaraan/delete/{id}', [JnsKendaraanController::class, 'destroy'])->name('jnsKendaraan.delete');

// route detailservice
Route::get('/detailservice', [DetailServiceController::class, 'index'])->name('detailService.index');
Route::get('/detailservice/add', [DetailServiceController::class, 'create'])->name('detailService.create');
Route::post('/detailservice/add', [DetailServiceController::class, 'store'])->name('detailService.store');
Route::get('/detailservice/edit/{id}', [DetailServiceController::class, 'edit'])->name('detailService.edit');
Route::post('/detailservice/edit/{id}', [DetailServiceController::class, 'update'])->name('detailService.update');
Route::get('/detailservice/delete/{id}', [DetailServiceController::class, 'destroy'])->name('detailService.delete');

// route jenisservice
Route::get('/jenisservice', [JnsServiceController::class, 'index'])->name('jnsService.index');
Route::get('/jenisservice/add', [JnsServiceController::class, 'create'])->name('jnsService.create');
Route::post('/jenisservice/add', [JnsServiceController::class, 'store'])->name('jnsService.store');
Route::get('/jenisservice/edit/{id}', [JnsServiceController::class, 'edit'])->name('jnsService.edit');
Route::post('/jenisservice/edit/{id}', [JnsServiceController::class, 'update'])->name('jnsService.update');
Route::get('/jenisservice/delete/{id}', [JnsServiceController::class, 'destroy'])->name('jnsService.delete');
