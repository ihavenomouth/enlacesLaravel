<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('inicio');
});


use App\Http\Controllers\EnlaceController;
use App\Models\Enlace;

Route::get('/enlaces', [EnlaceController::class, 'index'])->name('enlaces.index');

Route::middleware('auth')->group(function () {
  Route::get('/enlaces/create', [EnlaceController::class, 'create'])->name('enlaces.create');
  Route::post('/enlaces/create', [EnlaceController::class, 'store'])->name('enlaces.store');
  Route::delete('/enlaces/{enlace}', [EnlaceController::class, 'destroy'])->name('enlaces.destroy');
});

Route::fallback(function () {
  return view('errors/404');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
