<?php

namespace App\Http\Controllers;

use App\Models\Table;
use App\Models\Customer;
use App\Models\Reservation;


class RestaurantController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function tables()
    {
        $tables = Table::all();
        return view('tables', compact('tables'));
    }

    public function customers()
    {
        $customers = Customer::all();
        return view('customer', compact('customers'));
    }

    public function reservations()
    {
        $reservations = Reservation::with(['table', 'customer'])->get();
        return view('reservation', compact('reservations'));
    }
}
