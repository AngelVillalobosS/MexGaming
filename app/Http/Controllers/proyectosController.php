<?php

namespace App\Http\Controllers;

use App\Models\empleados;
use App\Models\proyectos;
use Illuminate\Http\Request;

class proyectosController extends Controller
{
    public function create()
    {
        $empleados = empleados::where('nivel', 'senior')
            ->orderBy('nombre')
            ->get(['id_empleado', 'nombre', 'apellido_paterno', 'rol', 'edad', 'foto', 'nivel']);

        return view('pages.insertProyect', compact('empleados'));
    }

    public function store(Request $request)
    {
        // Validación de datos del proyecto
        $validated = $request->validate([
            'nombre_proyecto' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha_inicio' => 'required|date',
            'fecha_cierre' => 'required|date|after_or_equal:fecha_inicio',
            'lider' => 'required|exists:empleados,id_empleado'
        ]);

        // Creación del proyecto (ajusta según tu modelo de proyectos)
        proyectos::create($validated);

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto creado exitosamente');
    }
}
