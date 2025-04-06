<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reporteController extends Controller
{
    public function index()
    {
        $proyectos = DB::table('proyectos as p')
            ->leftJoin('empleados as u', 'p.id_lider', '=', 'u.id_empleado')
            ->leftJoin('asignaciones as a', 'p.id_proyecto', '=', 'a.id_proyecto')
            ->select(
                'p.nombre as proyecto',
                DB::raw('CONCAT(u.nombre, " ", u.apellido_paterno) as lider'),
                DB::raw('COUNT(a.id_empleado) as empleados_asignados'),
                'p.fecha_inicio',
                'p.fecha_fin'
            )
            ->groupBy(
                'p.id_proyecto',
                'p.nombre',
                'u.id_empleado',
                'u.nombre',
                'u.apellido_paterno',
                'p.fecha_inicio',
                'p.fecha_fin'
            )
            ->get();

        return view('pages.reportProjects', compact('proyectos'));
    }
}
