<?php

use App\Http\Controllers\Web\Developer\CmsController;
use App\Http\Controllers\Web\Developer\CrudController;
use App\Http\Controllers\Web\Developer\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get("dashboard", [DashboardController::class, 'index'])->name('dashboard');
