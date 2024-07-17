<?php

use App\Http\Controllers\ContactController;
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


Route::get('/', [ContactController::class, 'index'])->name('index');
Route::get('/tambah-project', [ContactController::class, 'create'])->name('create');
Route::get('data-project', [ContactController::class, 'data'])->name('data');
Route::post('/tambah-project', [ContactController::class, 'store'])->name('store');
