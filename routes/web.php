<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\KlasemenController;

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

Route::get('/', [KlasemenController::class, 'index'])->name('klasemen.index');

Route::prefix('club')->group(function () {
    Route::get('/', [ClubController::class, 'index'])->name('club.index');
    Route::get('/create', [ClubController::class, 'create'])->name('club.create');
    Route::get('/edit/{id}', [ClubController::class, 'edit'])->name('club.edit');
    Route::post('/store', [ClubController::class, 'store'])->name('club.store');
    Route::post('/update/{id}', [ClubController::class, 'update'])->name('club.update');
    Route::get('/delete/{id}', [ClubController::class, 'destroy'])->name('club.delete');
});

Route::prefix('klasemen')->group(function () {
    Route::get('/', [KlasemenController::class, 'index'])->name('klasemen.index');
    Route::get('/create', [KlasemenController::class, 'create'])->name('klasemen.create');
    Route::get('/create2', [KlasemenController::class, 'create2'])->name('klasemen.create2');
    Route::post('/store', [KlasemenController::class, 'store'])->name('klasemen.store');
    Route::post('/store2', [KlasemenController::class, 'store2'])->name('klasemen.store2');
    Route::get('/delete/{id}', [KlasemenController::class, 'destroy'])->name('klasemen.delete');
});
