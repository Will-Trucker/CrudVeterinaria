@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Lista de Dueños</h1>
    <a href="{{ route('duenos.create') }}" class="btn btn-primary mb-3">Agregar Dueño</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th># ID</th>
                <th>Nombre</th>
                <th>DUI</th>
                <th>Número</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($duenos as $dueno)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dueno->nombre }}</td>
                <td>{{ $dueno->dui }}</td>
                <td>{{ $dueno->numero }}</td>
                <td>
                    <a href="{{ route('duenos.edit', $dueno->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('duenos.destroy', $dueno->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Ud. desea eliminar este dueño?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
