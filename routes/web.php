<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
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


Route::get('/', [ContactController::class, 'index'])->name('contact.index');
Route::middleware('auth')->group(function () {
    Route::get('/create', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::post('/{id}/update', [ContactController::class, 'update'])->name('contact.update');
    Route::post('/{id}/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');
});

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('logout', [LoginController::class, 'destroy'])->name('logout');