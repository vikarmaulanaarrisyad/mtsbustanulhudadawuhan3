<?php

use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $berita = Berita::with('kategori')->latest()->limit(6)->get();
    return view('welcome', compact('berita'));
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
