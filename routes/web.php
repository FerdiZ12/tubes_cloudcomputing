<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Middleware User Bebas
    Route::get('/history', [App\Http\Controllers\PendataanController::class, 'create'])->name('history');
    Route::get('/history/{id}', [App\Http\Controllers\PendataanController::class, 'show'])->name('history.show');
    Route::get('/news', [App\Http\Controllers\newscontroller::class, 'index'])->name('news');
    Route::get('/news/{id}', [App\Http\Controllers\newscontroller::class, 'show'])->name('news.show');

    // Middleware User Mahasiswa
    Route::get('/forecasting', [App\Http\Controllers\ForecastingController::class, 'index'])->name('forecasting')->middleware('userAkses:2');
    Route::post('/forecasting', [App\Http\Controllers\ForecastingController::class, 'store'])->name('forecasting.store')->middleware('userAkses:2');
    Route::post('/daftar/{id}', [App\Http\Controllers\newscontroller::class, 'daftar'])->name('loker.daftar');

    // Middleware User Alumni 
    Route::post('/news', [App\Http\Controllers\newscontroller::class, 'store'])->name('news.store')->middleware('userAkses:1');
    Route::get('/loker', [App\Http\Controllers\newscontroller::class, 'create'])->name('loker')->middleware('userAkses:1');
    Route::get('/edit/{id}', [App\Http\Controllers\newscontroller::class, 'edit'])->name('news.edit')->middleware('userAkses:1');
    Route::post('/update/{id}', [App\Http\Controllers\newscontroller::class, 'update'])->name('news.update')->middleware('userAkses:1');
    Route::get('/pendataan', [App\Http\Controllers\PendataanController::class, 'index'])->name('pendataan')->middleware('userAkses:1');
    Route::post('/pendataan', [App\Http\Controllers\PendataanController::class, 'store'])->name('pendataan.store')->middleware('userAkses:1');
    Route::delete('/delete/{id}', [App\Http\Controllers\newscontroller::class, 'destroy'])->name('news.delete');
    
});
