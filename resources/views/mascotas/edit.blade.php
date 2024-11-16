@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar una Mascota</h1>
        <form action="{{ route('mascotas.update', $mascota->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $mascota->nombre }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="dueno_id" class="form-label">Dueño</label>
                <select name="dueno_id" id="dueno_id" class="form-control" required>
                    <option value="">Seleccione un dueño</option>
                    @foreach ($duenos as $dueno)
                        <option value="{{ $dueno->id }}" {{ $dueno->id == $mascota->dueno_id ? 'selected' : '' }}>
                            {{ $dueno->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="veterinario_id" class="form-label">Veterinario</label>
                <select name="veterinario_id" id="veterinario_id" class="form-control" required>
                    <option value="">Seleccione un veterinario</option>
                    @foreach ($veterinarios as $veterinario)
                        <option value="{{ $veterinario->id }}"
                            {{ $veterinario->id == $mascota->veterinario_id ? 'selected' : '' }}>{{ $veterinario->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="sexo_id" class="form-label">Sexo</label>
                <select name="sexo_id" id="sexo_id" class="form-control" required>
                    <option value="">Seleccione un sexo</option>
                    @foreach ($sexos as $sexo)
                        <option value="{{ $sexo->id }}" {{ $sexo->id == $mascota->sexo_id ? 'selected' : '' }}>
                            {{ $sexo->descripcion }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Editar</button>
            <a href="{{ route('mascotas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
