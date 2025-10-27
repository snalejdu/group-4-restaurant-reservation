@extends('layouts.app')

@section('content')
<div class="text-center bg-white shadow-lg rounded p-5">
    <h1 class="display-5 fw-bold text-danger mb-3">Welcome to Our Restaurant!</h1>
    <p class="text-secondary fs-5 mb-4">Manage tables, customers, and reservations easily.</p>

    <div>
        <a href="/tables" class="btn btn-warning mx-2">View Tables</a>
        <a href="/customers" class="btn btn-success mx-2">View Customers</a>
        <a href="/reservations" class="btn btn-primary mx-2">View Reservations</a>
    </div>
</div>
@endsection
