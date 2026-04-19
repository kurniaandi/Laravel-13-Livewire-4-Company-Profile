<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home.index')->name('home');

Route::middleware(['auth', 'verified'])
    ->prefix('dashboard')
    ->name('dashboard.')
    ->group(function () {
        Route::view('/', 'dashboard')->name('index');
        Route::livewire('/heroes', 'pages::back.heroes.index')
            ->name('heroes.index');
    });

require __DIR__ . '/settings.php';
