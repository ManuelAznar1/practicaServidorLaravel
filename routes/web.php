<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfesorController;

Route::resource('alumnos', AlumnoController::class)
    ->middleware('auth');

// Ruta de recursos para profesores (esto genera todas las rutas necesarias)
Route::resource('profesores', ProfesorController::class)
    ->middleware('auth');

Route::get('/index', MainController::class);
Route::view("/", "home")->name("home");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get("lang/{language}", LanguageController::class)->name('language');
require __DIR__.'/auth.php';

?>

