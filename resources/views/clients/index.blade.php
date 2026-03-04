@extends('layouts.app')

@section('title', 'Lista de Clientes')

@section('content')

<h1>Lista de clientes</h1>
<button
    onclick="window.location.href=`clients/create`"
>
    Nuevo Cliente
</button>
<table>
    <tr>
        <th>Nro. Identidad</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Correo</th>
        <th>Acciones</th>
    </tr>
    <tr>
        @foreach ($clients as $client)
            <td>{{ $client->document_number }}</td>
            <td>{{ $client->first_name }}</td>
            <td>{{ $client->last_name }}</td>
            <td>{{ $client->email }}</td>
            <td> 
                <button 
                    onclick="window.location.href=`clients/{{$client->id}}`"
                >
                    Editar
                </button>
                <button
                    onclick="confirm(`¿Estas seguro de eliminar a {{$client->first_name}}?`)"
                >
                    Eliminar
                </button>
            </td>
        @endforeach
    </tr>
</table>


@endSection