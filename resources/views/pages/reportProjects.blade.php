@extends('index')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/report.css')}}">
<script src="{{asset('assets/js/report.js')}}"></script>
<h2 class="report-title">Registro de Proyecto</h2>
<div class="contenedor-principal">
    <table class="tabla-proyectos">
        <thead>
            <tr>
                <th>Nombre del proyecto</th>
                <th>Líder del proyecto</th>
                <th>Personas asignadas</th>
                <th>Fecha de inicio</th>
                <th>Fecha de entrega</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proyectos as $pro)
            <tr>
                <td>{{ $pro->proyecto }}</td>
                <td>{{ $pro->lider }}</td>
                <td>{{ $pro->empleados_asignados }}</td>
                <td>{{ $pro->fecha_inicio }}</td>
                <td>{{ $pro->fecha_fin }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="acciones">
        <button class="btn-imprimir">Imprimir</button>
    </div>
</div>
@endsection