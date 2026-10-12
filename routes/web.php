<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

// Beranda Utama
Route::get('/', [EventController::class, 'index'])->name('home');

// Form Tambah Dokumentasi Event
Route::get('/event/tambah', [EventController::class, 'create'])->name('event.create');
Route::post('/event/tambah', [EventController::class, 'store'])->name('event.store');

// Detail Event
Route::get('/event/{slug}', [EventController::class, 'show'])->name('event.show');