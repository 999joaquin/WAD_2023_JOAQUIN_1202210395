<?php

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
    return view('home');
});

Route::get('/showroom',[Showroom::class, 'index'])->name('showroom.create');
Route::get('/showroom/create', [Showroom::class, 'create'])->name('showroom.index');
Route::get('/showroom/store', [Showroom::class, 'index'])->name('showroom.create');