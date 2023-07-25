<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoProgresanController;


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
Route::get('home', function () {
    return view('layouts/main');
});
// Route::middleware('auth')->group(function () {
//     Route::get('dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
Route::controller(FotoProgresanController::class)->prefix('foto_progresan')->group(function () {
    Route::get('', [FotoProgresanController::class, 'index'])->name('foto_progresan');
    Route::get('tambah', 'tambah')->name('foto_progresan.tambah');
    Route::post('tambah', 'simpan')->name('foto_progresan.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('foto_progresan.edit');
    Route::post('edit/{id}', 'update')->name('foto_progresan.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('foto_progresan.hapus');
    Route::get('search', 'search')->name('foto_progresan.search');
});



