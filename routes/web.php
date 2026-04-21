<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminController;

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

    Route::get('/', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

    Route::get('/users', [AdminController::class, 'users'])
        ->name('admin.users');

    Route::get('/comments', [AdminController::class, 'comments'])
        ->name('admin.comments');

    Route::get('/images', [AdminController::class, 'images'])
        ->name('admin.images');

});