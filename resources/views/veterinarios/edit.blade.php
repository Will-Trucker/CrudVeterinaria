@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar un Veterinario</h1>
        <form action="{{ route('veterinarios.update', $veterinario->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $veterinario->nombre }}" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" value="{{$veterinario->telefono }}" required>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="{{ route('veterinarios.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
        </div>
@endsection
