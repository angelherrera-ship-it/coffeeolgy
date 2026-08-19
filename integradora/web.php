<?php

use App\Http\Controllers\ProfileController;
use App\Models\Libro;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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

// ===== Integradora: Librería El Lápiz =====

Route::get('/libros', function () {
    $libros = Libro::all();
    return view('libros.index', ['libros' => $libros]);
});

Route::get('/libros/nuevo', function () {
    return view('libros.nuevo');
});

Route::post('/libros/nuevo', function () {
    $datos = request()->validate([
        'titulo' => 'required',
        'precio' => 'required|integer',
    ], [
        'titulo.required' => 'Falta el título del libro.',
        'precio.required' => 'Falta el precio del libro.',
        'precio.integer' => 'Ese precio no es un número entero.',
    ]);

    Libro::create([
        'titulo' => request()->input('titulo'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/libros');
});