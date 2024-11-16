<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DriverController;


// Vendor Routes
Route::get('dashboard', [DriverController::class, 'dashboard'])
->name('dashboard');
