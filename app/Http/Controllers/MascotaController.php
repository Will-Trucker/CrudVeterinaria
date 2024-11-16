<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sexo;
use App\Models\Veterinario;
use App\Models\Propietario;
use App\Models\Mascota;

class MascotaController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::with('dueno', 'veterinario', 'sexo')->get();
        return view('mascotas.index', compact('mascotas'));
    }

    public function create()
    {
        $duenos = Propietario::all();
        $veterinarios = Veterinario::all();
        $sexos = Sexo::all();

        return view('mascotas.create', compact('duenos', 'veterinarios', 'sexos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'dueno_id' => 'required|exists:duenos,id',
            'sexo_id' => 'required|exists:sexo_mascotas,id',
            'veterinario_id' => 'required|exists:veterinarios,id',
        ]);

        Mascota::create($request->all());

        return redirect()->route('mascotas.index')->with('success', 'Mascota creada con éxito.');
    }

    public function edit($id)
    {
        $mascota = Mascota::findOrFail($id);
        $duenos = Propietario::all();
        $veterinarios = Veterinario::all();
        $sexos = Sexo::all();

        return view('mascotas.edit', compact('mascota', 'duenos', 'veterinarios', 'sexos'));
    }

    public function update(Request $request, $id)
    {
        $mascota = Mascota::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'dueno_id' => 'required|exists:duenos,id',
            'sexo_id' => 'required|exists:sexo_mascotas,id',
            'veterinario_id' => 'required|exists:veterinarios,id',
        ]);

        $mascota->update($request->all());

        return redirect()->route('mascotas.index')->with('success', 'Mascota actualizada con éxito.');
    }

    public function destroy($id)
    {
        Mascota::findOrFail($id)->delete();

        return redirect()->route('mascotas.index')->with('success', 'Mascota eliminada con éxito.');
    }

}
