<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propietario;
class PropietarioController extends Controller
{
    public function index(){
        $duenos = Propietario::all();

        return view('duenos.index',compact('duenos'));
    }

    public function create()
    {
        return view('duenos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'dui' => 'required|string|max:15|unique:duenos',
            'numero' => 'required|string|max:15',
        ]);

        Propietario::create($request->all());

        return redirect()->route('duenos.index')->with('success', 'Dueño creado con éxito.');
    }

    public function edit($id){
        $dueno = Propietario::findOrFail($id);

        return view('duenos.edit',compact('dueno'));
    }

    public function update(Request $request,$id){
        $dueno = Propietario::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'dui' => "required|string|max:15|unique:duenos,dui,{$id}",
            'numero' => 'required|string|max:15',
        ]);

        $dueno->update($request->all());

        return redirect()->route('duenos.index')->with('status','Dueño Editado exitosamente');
    }

    public function destroy($id)
    {
        Propietario::findOrFail($id)->delete();

        return redirect()->route('duenos.index')->with('success', 'Dueño eliminado exitosamente.');
    }



}
