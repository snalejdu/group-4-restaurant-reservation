@extends('layouts.app')

@section('content')
<div class="bg-white shadow rounded p-4">
    <h2 class="text-center mb-4 text-dark">Customer List</h2>

    <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tbody>
            @forelse($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->contact }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-muted">No customers found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
