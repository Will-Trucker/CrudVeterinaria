@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar un Veterinario</h1>
        <form action="{{ route('veterinarios.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('veterinarios.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection