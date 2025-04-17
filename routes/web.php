<?php

use App\Http\Controllers\detail_service as ControllersDetail_service;
use App\Http\Controllers\jns_service as ControllersJns_service;
use App\Http\Controllers\jnsKendaraan_Controller;
use App\Http\Controllers\kendaraan;
use App\Http\Controllers\mekanik;
use App\Http\Controllers\pemilik;
use App\Http\Controllers\service;
use App\Models\detail_service;
use App\Models\jns_service;
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
})->name('home');

Route::get('/detail-service', [ControllersDetail_service::class, 'index'])->name('detail-service.index');
Route::get('/detail-service/add', [ControllersDetail_service::class, 'create'])->name('detail-service.create');
Route::post('/detail-service/add', [ControllersDetail_service::class, 'store'])->name('detail-service.store');
Route::get('/detail-service/edit/{id}', [ControllersDetail_service::class, 'edit'])->name('detail-service.edit');
Route::post('/detail-service/edit/{id}', [ControllersDetail_service::class, 'update'])->name('detail-service.update');
Route::get('/detail-service/delete/{id}', [ControllersDetail_service::class, 'delete'])->name('detail-service.delete');

Route::get('/jenis-kendaraan', [jnsKendaraan_Controller::class, 'index'])->name('jenis-kendaraan.index');
Route::get('/jenis-kendaraan/add', [jnsKendaraan_Controller::class, 'create'])->name('jenis-kendaraan.create');
Route::post('/jenis-kendaraan/add', [jnsKendaraan_Controller::class, 'store'])->name('jenis-kendaraan.store');
Route::get('/jenis-kendaraan/edit/{id}', [jnsKendaraan_Controller::class, 'edit'])->name('jenis-kendaraan.edit');
Route::post('/jenis-kendaraan/edit/{id}', [jnsKendaraan_Controller::class, 'update'])->name('jenis-kendaraan.update');
Route::get('/jenis-kendaraan/delete/{id}', [jnsKendaraan_Controller::class, 'delete'])->name('jenis-kendaraan.delete');

Route::get('/jenis-service', [ControllersJns_service::class, 'index'])->name('jenis-service.index');
Route::get('/jenis-service/add', [ControllersJns_service::class, 'create'])->name('jenis-service.create');
Route::post('/jenis-service/add', [ControllersJns_service::class, 'store'])->name('jenis-service.store');
Route::get('/jenis-service/edit/{id}', [ControllersJns_service::class, 'edit'])->name('jenis-service.edit');
Route::post('/jenis-service/edit/{id}', [ControllersJns_service::class, 'update'])->name('jenis-service.update');
Route::get('/jenis-service/delete/{id}', [ControllersJns_service::class, 'delete'])->name('jenis-service.delete');

Route::get('/service', [service::class, 'index'])->name('service.index');
Route::get('/service/add', [service::class, 'create'])->name('service.create');
Route::post('/service/add', [service::class, 'store'])->name('service.store');
Route::get('/service/edit/{id}', [service::class, 'edit'])->name('service.edit');
Route::post('/service/edit/{id}', [service::class, 'update'])->name('service.update');
Route::get('/service/delete/{id}', [service::class, 'delete'])->name('service.delete');

Route::get('/mekanik', [mekanik::class, 'index'])->name('mekanik.index');
Route::get('/mekanik/add', [mekanik::class, 'create'])->name('mekanik.create');
Route::post('/mekanik/add', [mekanik::class, 'store'])->name('mekanik.store');
Route::get('/mekanik/edit/{id}', [mekanik::class, 'edit'])->name('mekanik.edit');
Route::post('/mekanik/edit/{id}', [mekanik::class, 'update'])->name('mekanik.update');
Route::get('/mekanik/delete/{id}', [mekanik::class, 'delete'])->name('mekanik.delete');

Route::get('/pemilik', [pemilik::class, 'index'])->name('pemilik.index');
Route::get('/pemilik/add', [pemilik::class, 'create'])->name('pemilik.create');
Route::post('/pemilik/add', [pemilik::class, 'store'])->name('pemilik.store');
Route::get('/pemilik/edit/{id}', [pemilik::class, 'edit'])->name('pemilik.edit');
Route::post('/pemilik/edit/{id}', [pemilik::class, 'update'])->name('pemilik.update');
Route::get('/pemilik/delete/{id}', [pemilik::class, 'delete'])->name('pemilik.delete');

Route::get('/kendaraan', [kendaraan::class, 'index'])->name('kendaraan.index');
Route::get('/kendaraan/add', [kendaraan::class, 'create'])->name('kendaraan.create');
Route::post('/kendaraan/add', [kendaraan::class, 'store'])->name('kendaraan.store');
Route::get('/kendaraan/edit/{id}', [kendaraan::class, 'edit'])->name('kendaraan.edit');
Route::post('/kendaraan/edit/{id}', [kendaraan::class, 'update'])->name('kendaraan.update');
Route::get('/kendaraan/delete/{id}', [kendaraan::class, 'delete'])->name('kendaraan.delete');