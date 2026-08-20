<?php

use App\Http\Controllers\ProfileController;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/productos', function () {
    $productos = Producto::all();
    return view('productos.index', ['productos' => $productos]);
});

Route::get('/productos/nuevo', function () {
    return view('productos.nuevo');
});

Route::post('/productos/nuevo', function () {
    $datos = request()->validate([
        'nombre' => 'required',
        'descripcion' => 'nullable',
        'precio' => 'required|numeric',
        'stock' => 'required|integer|min:0',
    ], [
        'nombre.required' => 'Falta el nombre del producto.',
        'precio.required' => 'Falta el precio del producto.',
        'precio.numeric' => 'Ese precio no es un número válido.',
        'stock.required' => 'Falta indicar el stock disponible.',
        'stock.integer' => 'El stock debe ser un número entero.',
        'stock.min' => 'El stock no puede ser negativo.',
    ]);

    Producto::create($datos);

    return redirect('/productos');
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
