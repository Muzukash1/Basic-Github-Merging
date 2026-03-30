<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
//static pages
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/features', [PageController::class, 'feature'])->name('features');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

//dynamic pages
Route::get('/about', [AboutController::class, 'index'])->name('about');