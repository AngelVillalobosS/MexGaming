@extends('index')
@section('content')
<h2 class="report-title">Registro de Proyecto</h2>
<div class="contenedor-principal">
    <table class="tabla-proyectos">
        <thead>
            <tr>
                <th>Nombre del proyecto</th>
                <th>Líder del proyecto</th>
                <th>Personas asignadas</th>
                <th>Fecha de inicio</th>
                <th>Fecha de fin</th>
            </tr>
        </thead>
        @foreach($reporte as $item)
        <tr>
            <td>{{ $item->proyecto }}</td>
            <td>{{ $item->lider }}</td>
            <td>{{ $item->empleados_asignados }}</td>
            <td>{{ $item->fecha_inicio->format('d/m/Y') }}</td>
            <td>{{ $item->fecha_fin->format('d/m/Y') }}</td>
        </tr>
        @endforeach
    </table>

    <div class="acciones">
        <button class="btn-imprimir">Imprimir</button>
    </div>
</div>

<style>
    main {
        min-height: 100vh;
        position: relative;
        padding-bottom: 80px;
        /* Espacio para el botón */
    }

    :root {
        --primary-color: #2c3e50;
        --secondary-color: #3498db;
        --accent-color: #e74c3c;
        --text-color: #333;
        --border-color: #bdc3c7;
    }

    .report-title {
        display: flex;
        align-items: center;
        padding-left: 1rem;
        gap: 1rem;
        color: var(--primary-color);
        border-bottom: 2px solid var(--border-color);
        padding-bottom: 1rem;
    }

    .contenedor-principal {
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
    }

    .tabla-proyectos {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    .tabla-proyectos th,
    .tabla-proyectos td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .tabla-proyectos th {
        background-color: #f5f5f5;
    }

    .acciones {
        position: fixed;
        bottom: 20px;
        right: 20px;
    }

    .btn-imprimir {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    @media print {
        .acciones {
            display: none;
        }

        .tabla-proyectos {
            width: 100% !important;
        }
    }

    @media screen and (max-width: 768px) {
        .contenedor-principal {
            padding: 10px;
            margin: 10px auto;
        }

        .tabla-proyectos th,
        .tabla-proyectos td {
            padding: 8px;
            font-size: 14px;
            white-space: nowrap;
            /* Previene salto de línea no deseado */
        }

        .btn-imprimir {
            padding: 8px 15px;
            font-size: 14px;
        }

        /* Scroll horizontal para móviles */
        .tabla-proyectos {
            display: block;
            overflow-x: auto;
        }
    }

    @media screen and (max-width: 480px) {
        body {
            padding-bottom: 60px;
            /* Reduce espacio para botón en móviles */
        }

        .acciones {
            bottom: 10px;
            right: 10px;
        }
    }
</style>
@endsection