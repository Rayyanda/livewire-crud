<?php

use App\Livewire\Login;
use App\Livewire\Mahasiswa;
use App\Livewire\Mahasiswa\Create;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login',Login::class)->name('login');

Route::get('/', \App\Livewire\Dashboard::class)->name('dashboard')->middleware('auth');

Route::prefix('mahasiswa')->group(function(){
    Route::get('/',Mahasiswa::class)->name('indeks_mahasiswa');
    Route::get('/forms',Create::class)->name('mhs_create_page');
})->middleware('auth');


Route::get('/logout',[Login::class, 'logout'])->name('logout');
