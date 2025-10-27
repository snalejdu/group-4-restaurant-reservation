@extends('layouts.app')

@section('content')
<div class="bg-white shadow rounded p-4">
    <h2 class="text-center mb-4 text-dark">Reservation List</h2>

    <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Table Number</th>
                <th>Customer Name</th>
                <th>Date & Time</th>
                <th>Notes</th>
            </tr>
        </thead>
        <tbody>
            @forelse($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>{{ $reservation->table->table_number ?? 'N/A' }}</td>
                    <td>{{ $reservation->customer->name ?? 'N/A' }}</td>
                    <td>{{ $reservation->date_time }}</td>
                    <td>{{ $reservation->notes }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-muted">No reservations yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
