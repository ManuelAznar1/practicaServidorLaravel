<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor; // Importar el modelo

class ProfesorController extends Controller
{
    // Mostrar lista de profesores
    public function index()
    {
        // Obtener todos los profesores
        $filas = Profesor::all();

        // Definir los campos que se van a mostrar en la vista
        $campos = ['id', 'nombre', 'apellido', 'email', 'telefono', 'fecha_nacimiento'];

        // Pasar las filas y los campos a la vista
        return view('profesores.index', compact('filas', 'campos'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('profesores.create');
    }

    // Guardar un nuevo profesor
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:profesores',
        ]);

        $profesor = new Profesor($request->all());        
        $profesor->save();
        session()->flash("mensaje","Profesor $profesor->nombre registrado");


        return redirect()->route('profesores.index')->with('success', 'Profesor creado correctamente.');
    }

    // Mostrar un profesor específico
    public function show($id)
    {
        $profesor = Profesor::findOrFail($id);
        return view('profesores.show', compact('profesor'));
    }

    // Mostrar formulario de edición
    public function edit($id)
    {
        $profesor = Profesor::findOrFail($id);
        return view('profesores.edit', compact('profesor'));
    }

    // Actualizar un profesor
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:profesores,email,' . $id,
        ]);

        $profesor = Profesor::findOrFail($id);
        $profesor->update($request->all());

        session()->flash("mensaje","Profesor $profesor->nombre actualizado");

        return redirect()->route('profesores.index')->with('success', 'Profesor actualizado correctamente.');
    }

    // Eliminar un profesor
    public function destroy($id)
    {
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();

        session()->flash("mensaje","Profesor $profesor->nombre borrado");
        return redirect()->route('profesores.index')->with('success', 'Profesor eliminado correctamente.');
    }
}

?>