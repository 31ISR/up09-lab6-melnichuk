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
Route::resource('todo', TodoController::class);