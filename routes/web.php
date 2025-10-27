<?php

use Illuminate\Support\Facades\Route;
use App\Models\Table;
use App\Models\Customer;
use App\Models\Reservation;

// Home Page
Route::get('/', function () {
    return view('home');
});

// Tables Page
Route::get('/tables', function () {
    $tables = Table::all(); // Get all data from "tables" table
    return view('tables', ['tables' => $tables]);
});

// Customers Page
Route::get('/customers', function () {
    $customers = Customer::all(); // Get all data from "customers" table
    return view('customer', ['customers' => $customers]);
});

// Reservations Page
Route::get('/reservations', function () {
    // Get all reservations, including related table and customer data
    $reservations = Reservation::with(['table', 'customer'])->get();
    return view('reservation', ['reservations' => $reservations]);
});
