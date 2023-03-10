<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\tb_mahasiswa;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('focus-2.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// route::get('/dashboard', [DashboardController::class,'tampil']);
route::get('/dashboard', [DashboardController::class,'tampil']);
route::get('/dashboard/{id}/edit', [DashboardController::class, 'edit']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/dashboard/form',[DashboardController::class,'tampil']);
Route::get('/dashboard/form',[DashboardController::class,'index']);
Route::get('/dashboard/pengisian',[DashboardController::class,'pengisian']);
Route::get('/dashboard/read',[DashboardController::class,'read']);
Route::get('/dashboard/store',[DashboardController::class,'store']);
Route::get('/read/{id_mhs}/edit',[DashboardController::class,'edit']);
Route::delete('/read/{id_mhs}',[DashboardController::class,'delete']);




require __DIR__.'/auth.php';
