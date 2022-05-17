<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\perjalananController;
use App\Http\Controllers\userController;
use App\Http\Controllers\loginController;

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

Route::get('/', function () {return view('pages.home');});

Route::get('/register', [userController::class, 'halamanRegister'])->name('register');
// Route::get('/login', [userController::class, 'halamanLogin']);
Route::get('/input', [perjalananController::class, 'input'])->name('input');
Route::get('/table', [perjalananController::class, 'index'])->name('table');
Route::post('/simpanuser', [userController::class, 'simpanUser']);
Route::post('/simpandataperjalanan', [perjalananController::class, 'simpanData']);
Route::get('/login', [loginController::class, 'halamanLogin'])->name('halamanlogin');
Route::any('/postlogin', [loginController::class, 'login']);
Route::get('/logout', [loginController::class, 'logout'])->name('logout');
Route::get('/cari', [perjalananController::class, 'cariPerjalanan']);
Route::get('/urut', [perjalananController::class, 'urutkan']);
Route::get('/sort', [perjalananController::class, 'sort']);
Route::post('/hapusPerjalanan', [perjalananController::class, 'hapusData']);

