<?php
<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Estudiante as ModelsEstudiante;
use Illuminate\Http\Request;

class EstudianteControlador extends Controller
{
    public function index()
    {
        $estudiantes = ModelsEstudiante::all();
        return view('tabla', compact('estudiantes'));
    }
    public function register()
    {
        $categorias = Categoria::all();
        return view('formulario', compact('categorias'));
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:45',
            'apellido' => 'required|max:45',
            'año' => 'required|max:45',
            'carnet' => 'required|max:45',
            'edad' => 'required|max:45',
            'category_id' => 'required',
        ]);;

        ModelsEstudiante::insert($data);

        return redirect(route('tabla'));
    }
}
