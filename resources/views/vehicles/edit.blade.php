@extends('layouts.app')

@section('title', 'Registrar un vehiculo')

@section('content')

<form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <th>Placa</th>
            <td><input type="text" name="plate" value="{{ $vehicle->plate }}" required></td>
        </tr>
        <tr>
            <th>Model</th>
            <td><input type="text" name="model" value="{{ $vehicle->model }}" required></td>
        </tr>
        <tr>
            <th>Año de Creación</th>
            <td><input type="number" name="manufacturing_year" value="{{ $vehicle->manufacturing_year }}" required></td>
        </tr>
        <tr>
            <th>Cliente</th>
            <td><input type="number" name="client_id" value="{{ $vehicle->client_id }}" required></td>
        </tr>
    </table>

    <button type="submit">Actualizar</button>
    
</form>

<button
        onclick="window.location.href='{{ route('vehicles.index') }}'"
>
    Salir
</button>

@endsection