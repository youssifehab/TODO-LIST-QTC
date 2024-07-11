<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



// Todos Routes
Route::middleware(['auth'])->group(function () {
    Route::get('todos/create', [TodoController::class, 'create'])
        ->name('todos.create');

    Route::post('todos', [TodoController::class, 'store'])
        ->name('todos.store');

    Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])
        ->name('todos.edit');

    Route::put('/todos/{todo}', [TodoController::class, 'update'])
        ->name('todos.update');

    Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
});

require __DIR__ . '/auth.php';
