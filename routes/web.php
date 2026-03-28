<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\CommentController;

require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('user.menu');
});

Route::get('/dashboard', function () {
    return view('user.menu');
})->middleware(['auth'])->name('dashboard');


Route::get('/detalle/{imagen}', [ImagenController::class, 'show'])
    ->name('imagen.show');


Route::post('/comentarios', [CommentController::class, 'store'])
    ->name('comentarios.store');

Route::put('/comentarios/{id}', [CommentController::class, 'update'])
    ->name('comentarios.update');

Route::delete('/comentarios/{id}', [CommentController::class, 'destroy'])
    ->name('comentarios.delete');


Route::resource('user', UserController::class);

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('/', [ImagenController::class, 'index'])
        ->name('admin.dashboard');
    

    Route::get('/create', [ImagenController::class, 'create'])
        ->name('admin.create');

    Route::post('/', [ImagenController::class, 'store'])
        ->name('admin.store');

    Route::get('/{imagen}/edit', [ImagenController::class, 'edit'])
        ->name('admin.edit');

    Route::put('/{imagen}', [ImagenController::class, 'update'])
        ->name('admin.update');

    Route::delete('/{imagen}', [ImagenController::class, 'destroy'])
        ->name('admin.delete');
});