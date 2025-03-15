<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\TodoController;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/goodbye', [WelcomeController::class, 'goodbye'])->name('goodbye');

// note
Route::resource('note', NoteController::class);
// to do
// Route::resource('todo', TodoController::class);

Route::get('/todo/{id}', [TodoController::class, 'show'])->name('todo.show');
Route::get('todo/{id}/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::resource('todo', TodoController::class);


//Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
//Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create');
//Route::post('/todo', [TodoController::class, 'store'])->name('todo.store');
//Route::get('/todo/{id}', [TodoController::class, 'show'])->name('todo.show');
//Route::get('/todo/{id}/edit', [TodoController::class, 'edit'])->name('todo.edit');
//Route::put('/todo/{id}', [TodoController::class, 'update'])->name('todo.uptododate');
//Route::delete('/todo/{id}', [TodoController::class, 'destroy'])->name('todo.destroy');