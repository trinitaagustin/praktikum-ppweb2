<?php
use App\HttP\Controllers\FormController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ParamedikController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/pasien/show',[PasienController::class,'show']);

Route::get('/pasien/index',[PasienController::class,'index'])
->name('pasien.index');

Route::get('/pasien/create',[PasienController::class,'create'])
->name('pasien.create');

Route::post('/pasien/store',[PasienController::class,'store'])
->name('pasien.store');

Route::get('/paramedik', [ParamedikController::class, 'index']); 

// Menampilkan form tambah paramedik
Route::get('/paramedik/create', [ParamedikController::class, 'create']);

// Menyimpan paramedik baru ke database
Route::post('/paramedik', [ParamedikController::class, 'store']);

// Menampilkan detail paramedik berdasarkan ID
Route::get('/paramedik/{id}', [ParamedikController::class, 'show']);

// Menampilkan form edit paramedik berdasarkan ID
Route::get('/paramedik/{id}/edit', [ParamedikController::class, 'edit']);

// Menyimpan perubahan paramedik ke database
Route::put('/paramedik/{id}', [ParamedikController::class, 'update']);

// Menghapus data paramedik berdasarkan ID
Route::delete('/paramedik/{id}', [ParamedikController::class,'destroy']);