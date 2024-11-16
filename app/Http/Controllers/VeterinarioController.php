<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veterinario;

class VeterinarioController extends Controller
{
    public function index()
    {
        $veterinarios = Veterinario::all();
        return view('veterinarios.index', compact('veterinarios'));
    }

    public function create()
    {
        return view('veterinarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
        ]);

        Veterinario::create($request->all());

        return redirect()->route('veterinarios.index')->with('success', 'Veterinario creado exitosamente.');
    }

    public function edit($id){
        $veterinario = Veterinario::findOrFail($id);
        return view('veterinarios.edit', compact('veterinario'));
    }

    public function update(Request $request, $id)
    {
        $veterinario = Veterinario::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
        ]);

        $veterinario->update($request->all());

        return redirect()->route('veterinarios.index')->with('success', 'Veterinario actualizado exitosamente.');
    }

    public function destroy($id)
    {
        Veterinario::findOrFail($id)->delete();

        return redirect()->route('veterinarios.index')->with('success', 'Veterinario eliminado exitosamente.');
    }

}
