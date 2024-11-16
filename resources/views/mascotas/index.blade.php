@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br>
        <a href="{{ route('mascotas.create') }}" class="btn btn-primary mb-3">Agregar Mascota</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th># id</th>
                    <th>Nombre</th>
                    <th>Dueño</th>
                    <th>Veterinario</th>
                    <th>Sexo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mascotas as $mascota)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mascota->nombre }}</td>
                    <td>{{ $mascota->dueno->nombre }}</td>
                    <td>{{ $mascota->veterinario->nombre }}</td>
                    <td>{{ $mascota->sexo->descripcion }}</td>
                    <td>
                        <a href="{{ route('mascotas.edit', $mascota->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('mascotas.destroy', $mascota->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar esta mascota?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
