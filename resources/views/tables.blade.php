@extends('layouts.app')

@section('content')
<div class="bg-white shadow rounded p-4">
    <h2 class="text-center mb-4 text-dark">Table List</h2>

    <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Table Number</th>
                <th>Capacity</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tables as $table)
                <tr>
                    <td>{{ $table->id }}</td>
                    <td>{{ $table->table_number }}</td>
                    <td>{{ $table->capacity }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-muted">No tables available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
