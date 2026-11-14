<?php

use App\Http\Controllers\KomplainController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

// Halaman Utama Landing Page (Desain ala KFC)
Route::get('/', [LandingPageController::class, 'index'])->name('home');

// Halaman Khusus Form Komplain (Tembak API ke PacificV4)
Route::get('/komplain', [KomplainController::class, 'index'])->name('komplain.index');
Route::post('/komplain', [KomplainController::class, 'store'])->name('komplain.store');
