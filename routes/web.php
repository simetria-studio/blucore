<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/contato', [SiteController::class, 'contato'])->name('contato');
