<?php

use App\Http\Controllers\jnsKendaraan_Controller;
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
    return view('template');
});

Route::get('/Jenis_Kendaraan', [jnsKendaraan_Controller::class, 'index'])->name('jnsKendaraan.index');