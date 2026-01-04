<?php

declare(strict_types=1);

use App\Http\Controllers\App\AppDashboardShowController;
use App\Http\Controllers\Public\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class)->name('home');


Route::middleware(['auth', 'verified', 'nossr'])->group(function (): void {

    Route::get('dashboard', AppDashboardShowController::class)->name('dashboard');

});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
