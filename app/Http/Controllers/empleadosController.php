<?php

namespace App\Http\Controllers;

use App\Models\empleados;
use Illuminate\Http\Request;

class empleadosController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos recibidos
        $validated = $request->validate([
            'nombre'           => 'required|string|max:100',
            'apellido_paterno' => 'required|string|max:100',
            'apellido_materno' => 'nullable|string|max:100',
            'edad'             => 'nullable|integer',
            'rol'              => 'nullable|string|max:50', // se mapea el 'role' del formulario
            'nivel'            => 'nullable|string|max:20',
            'language'         => 'nullable|string|max:50',
            'especializacion'  => 'nullable|array',
            'especializacion.*' => 'nullable|string|max:50',
            'metodologia'      => 'string|max:50',
            'photo'            => 'nullable|image|max:2048'
        ]);

        // Mapear el valor del input "role" a la clave "rol"
        $validated['rol'] = $request->input('role');

        // Si no se envía "nivel", asignar un valor por defecto (por ejemplo, "junior")
        if (!$request->filled('nivel')) {
            $validated['nivel'] = 'junior';
        }

        // Convertir el array de especialización en una cadena, si existe
        if ($request->has('especializacion')) {
            $validated['especializacion'] = implode(',', $validated['especializacion']);
        }

        // Mapear "language" a "lenguaje" en la base de datos
        if ($request->filled('language')) {
            $validated['lenguaje'] = $validated['language'];
            unset($validated['language']);
        }

        // Procesar la foto (si existe)
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/empleados');
            $validated['foto'] = $path;
        }

        // Crear el registro en la base de datos
        empleados::create($validated);

        // Redirigir o devolver una respuesta
        return redirect()->back()->with('success', 'Empleado registrado correctamente.');
    }
}
