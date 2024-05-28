<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControladorEjemplo;


Route::get('/', function () {
    return view('login.auth');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/Usuarios', function () {
    return view('Usuarios');
})->middleware(['auth', 'verified'])->name('Usuarios');

Route::get('/Doctores', function () {
    return view('Doctores');
})->middleware(['auth', 'verified'])->name('Doctores');

Route::get('/RegistroUsuarios', function () {
    return view('RegistroUsuarios');
})->middleware(['auth', 'verified'])->name('RegistroUsuarios');

Route::get('/RegistroDoctores', function () {
    return view('RegistroDoctores');
})->middleware(['auth', 'verified'])->name('RegistroDoctores');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
