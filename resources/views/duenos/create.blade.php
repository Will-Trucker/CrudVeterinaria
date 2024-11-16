@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Dueño</h1>
    <form action="{{ route('duenos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="dui" class="form-label">DUI</label>
            <input type="text" name="dui" id="dui" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Número</label>
            <input type="text" name="numero" id="numero" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('duenos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
