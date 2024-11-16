@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Veterinarios</h1>
        <a href="{{ route('veterinarios.create') }}" class="btn btn-primary mb-3">Agregar Veterinario</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($veterinarios as $veterinario)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $veterinario->nombre }}</td>
                    <td>{{ $veterinario->telefono }}</td>
                    <td>
                        <a href="{{ route('veterinarios.edit', $veterinario->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('veterinarios.destroy', $veterinario->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este veterinario?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
