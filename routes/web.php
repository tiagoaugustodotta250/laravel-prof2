<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Alunos;

// Route::view('/', 'welcome');

Route::get('/', Home::class)->name('home');

Route::get('alunos', Alunos::class)->name('alunos');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
