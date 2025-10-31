<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

Route::get('/', [RestaurantController::class, 'home']);
Route::get('/tables', [RestaurantController::class, 'tables']);
Route::get('/customers', [RestaurantController::class, 'customers']);
Route::get('/reservations', [RestaurantController::class, 'reservations']);

