@extends('layouts.app')

@section('title', 'Registrar un cliente')

@section('content')

<form action="{{ route('clients.store') }}" method="POST">
    @csrf
    <table>
        <tr>
            <th>Nombres</th>
            <td><input type="text"required></td>
        </tr>
        <tr>
            <th>Apellidos</th>
            <td><input type="text"></td>
        </tr>
        <tr>
            <th>Tipo de Documento</th>
            <td>
                <select>
                    <option>Dni</option>
                    <option>Ruc</option>
                    <option>Carnet de Extranjeria</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Nro de Documento</th>
            <td><input type="number"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email"></td>
        </tr>
        <tr>
            <th>Telefono</th>
            <td><input type="number"></td>
        </tr>
    </table>

    <button type="submit">Guardar</button>
    <button type="reset">Limpiar</button>
    
</form>

<button
        onclick="window.location.href=`../clients`"
>
    Salir
</button>

@endSection