@extends('index')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/projects.css')}}">
<script src="{{asset('assets/js/projects.js')}}"></script>
<title>Registro de Proyecto - MexGaming</title>
<h2 class="registration-title">Registro de Proyecto</h2>
<section class="project-registration">
    <form action="/proyectos" method="POST" class="registration-form">
        @csrf

        <div class="form-group full-width">
            <label for="nombre_proyecto">Nombre del Proyecto:</label>
            <input type="text" id="nombre_proyecto" name="nombre_proyecto" required>
        </div>

        <div class="form-group full-width">
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" rows="4" required></textarea>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="fecha_inicio">Fecha de Inicio:</label>
                <input type="date" id="fecha_inicio" name="fecha_inicio" required>
            </div>

            <div class="form-group">
                <label for="fecha_cierre">Fecha de Cierre:</label>
                <input type="date" id="fecha_cierre" name="fecha_cierre" required>
            </div>
        </div>

        <div class="select-group full-width">
            <label for="lider">Líder del Proyecto:</label>
            <select name="lider" id="lider" required>
                <option value="" disabled selected hidden class="placeholder-option">Selecciona un líder</option>
                @foreach($empleados as $empleado)
                <option value="{{$empleado->id_empleado}}">{{$empleado->nombre}} {{$empleado->apellido_paterno}} {{$empleado->apellido_materno}}</option>
                @endforeach
                <!-- opciones con Foreach -->
            </select>
        </div>
        <!-- Tarjeta del líder -->
        <div id="leader-card-container" style="display: none;">
            <div class="leader-card">
                <div class="leader-photo">
                    <img id="leader-photo" alt="Foto del líder">
                </div>
                <div class="leader-info">
                    <h4 id="leader-name"></h4>
                    <p>Cargo: <span id="leader-rol"></span></p>
                    <p>Edad: <span id="leader-edad"></span> años</p>
                    <p>Nivel: <span id="leader-nivel"></span></p>
                </div>
            </div>
        </div>
        <div class="form-group full-width">
            <button type="submit" class="submit-btn">Registrar Proyecto</button>
        </div>
    </form>
</section>

<script>
</script>
@endsection