<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/goodbye', [WelcomeController::class, 'goodbye'])->name('goodbye');
