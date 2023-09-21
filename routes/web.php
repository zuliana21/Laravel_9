<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswaController;

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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/sekolahs', [siswaController::class, 'index'])->name('sekolahs.index');

Route::get('/sekolahs/tambah', [siswaController::class, 'tambah'])->name('sekolahs.tambah');

Route::post('/sekolahs', [siswaController::class, 'store'])->name('sekolahs.store');

Route::get('/sekolahs/{id}/edit', [siswaController::class, 'edit'])->name('sekolahs.edit');

Route::put('/sekolahs/{id}', [siswaController::class, 'update'])->name('sekolahs.update');

Route::delete('/sekolahs/{id}', [siswaController::class, 'destroy'])->name('sekolahs.destroy');


Route::get('/default', function () {
    return view('default');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
