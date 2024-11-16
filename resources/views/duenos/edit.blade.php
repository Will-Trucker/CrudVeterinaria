@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Dueño</h1>
    <form action="{{ route('duenos.update', $dueno->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $dueno->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="dui" class="form-label">DUI</label>
            <input type="text" name="dui" id="dui" class="form-control" value="{{ $dueno->dui }}" required>
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Número</label>
            <input type="text" name="numero" id="numero" class="form-control" value="{{ $dueno->numero }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('duenos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
