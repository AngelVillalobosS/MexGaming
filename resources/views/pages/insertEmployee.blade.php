@extends('index')

@section('content')
<div class="container">
    <!-- Encabezado (igual que antes) -->
    <h2 class="form-title">Registrar Empleado</h2>
    <main class="form-wrapper">


        <form class="employee-form" method="POST" action="{{ route('empleados.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Sección modificada: Campos a la izquierda + Imagen derecha -->
            <div class="form-section-grid">
                <!-- Columna Izquierda - Campos del Formulario -->
                <div class="personal-data">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text" name="nombre" required>
                    </div>

                    <div class="form-group">
                        <label>Apellido Paterno:</label>
                        <input type="text" name="apellido_paterno" required>
                    </div>

                    <div class="form-group">
                        <label>Apellido Materno:</label>
                        <input type="text" name="apellido_materno">
                    </div>

                    <div class="form-group" style="width: 25%;">
                        <label>Edad:</label>
                        <input type="number" name="edad">
                    </div>
                </div>

                <!-- Columna Derecha - Imagen -->
                <div class="photo-section">
                    <div class="photo-preview">
                        <img src="{{ asset('assets/images/stock/dftl_employee.png') }}"
                            alt="Foto del empleado"
                            id="previewPhoto">
                        <input type="file"
                            id="employeePhoto"
                            name="photo"
                            accept="image/*"
                            hidden
                            onchange="previewImage(this)">
                        <label for="employeePhoto" class="upload-label">
                            <i class="fas fa-camera"></i> Subir Foto
                        </label>
                    </div>
                </div>
            </div>

            <!-- Especificaciones Técnicas -->
            <div class="tech-specs">
                <div class="specs-group">


                    <div class="form-group">
                        <label>Rol:</label>
                        <select class="role-select" name="role" id="roleSelect" onchange="showSubcategory()">
                            <option value="programador">Programador</option>
                            <option value="diseñador">Diseñador</option>
                            <option value="ingeniero">Ingeniero de Software</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Nivel:</label>
                        <select class="level-select" name="nivel">
                            <option value="junior">Junior</option>
                            <option value="semi-senior">Semi-Senior</option>
                            <option value="senior">Senior</option>
                        </select>
                    </div>
                </div>

                <!-- Subcategorías Dinámicas -->
                <div class="subcategories" id="subcategories">
                    <!-- Contenido dinámico según JS -->
                </div>
            </div>

            <!-- Mensaje de exito -->
            @if(session('success'))
            <div class="alert-success">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
            @endif


            <!-- Acciones -->
            <div class="form-actions">
                <button type="submit" class="btn-print">
                    <i class="fas fa-print"></i> Guardar
                </button>
                <button type="reset" class="btn-secondary">
                    <i class="fas fa-undo"></i> Limpiar
                </button>
            </div>
        </form>
    </main>
</div>

<script>
    // Preview de imagen
    function previewImage(input) {
        const preview = document.getElementById('previewPhoto');
        const file = input.files[0];
        const reader = new FileReader();

        reader.onloadend = () => preview.src = reader.result;
        file ? reader.readAsDataURL(file) : preview.src = "{{ asset('images/default-avatar.png') }}";
    }

    // Subcategorías dinámicas
    function showSubcategory() {
        const role = document.getElementById('roleSelect').value;
        const container = document.getElementById('subcategories');
        let content = '';

        switch (role) {
            case 'programador':
                content = `
                    <div class="subcategory-group programming-languages">
                    <div class="form-group">
                        <label>Lenguaje de Programación:</label>
                        <div class="custom-select-wrapper">
                            <select class="tech-select" name="language" onchange="showLanguageDetails()">
                                <option value="java">Java</option>
                                <option value="python">Python</option>
                                <option value="lua">LUA</option>
                            </select>
                            <div class="select-arrow"></div>
                        </div>
                    </div>
                </div>
                `;
                break;
            case 'diseñador':
                content = `
                <div class="subcategory-group">
                    <label>Especialización:</label>
                    <div class="specialization-options">
                        <label><input type="checkbox" name="especializacion" value="visual"> Visual</label>
                        <label><input type="checkbox" name="especializacion" value="ux"> UX</label>
                        <label><input type="checkbox" name="especializacion" value="narrativo"> Narrativo</label>
                    </div>
                </div>`;
                break;

            case 'ingeniero':
                content = `
                <div class="subcategory-group">
                    <label>Metodologías:</label>
                    <div class="methodology-options">
                        <select name="metodologia">
                            <option value="scrum">Scrum</option>
                            <option value="kanban">Kanban</option>
                            <option value="sprint">Sprint</option>
                        </select>
                    </div>
                </div>`;
                break;

            default:
                content = '';
        }

        container.innerHTML = content;
    }

    // Inicializar subcategorías al cargar
    document.addEventListener('DOMContentLoaded', showSubcategory);
</script>
<!-- Diseño de la vista -->
<style>
    :root {
        --primary-color: #2c3e50;
        --secondary-color: #3498db;
        --accent-color: #e74c3c;
        --text-color: #333;
        --border-color: #bdc3c7;
    }

    /* Encabezado */
    .main-header {
        background: var(--primary-color);
        padding: 1rem 2rem;
        margin-bottom: 2rem;
    }

    .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
    }

    .system-title {
        color: white;
        margin: 0;
        font-size: 1.8rem;
    }

    .system-url {
        color: #95a5a6;
        font-size: 0.9rem;
    }

    .back-button {
        background: var(--secondary-color);
        color: white;
        padding: 0.6rem 1.2rem;
        border-radius: 4px;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    /* Formulario Principal */
    .form-wrapper {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }

    .form-title {
        display: flex;
        align-items: center;
        padding-left: 1rem;
        gap: 1rem;
        color: var(--primary-color);
        border-bottom: 2px solid var(--border-color);
        padding-bottom: 1rem;
    }

    /* Modificación clave en el CSS */
    .form-section-grid {
        grid-template-columns: 1fr 250px;
        /* Invertimos el orden */
        gap: 3rem;
        /* Aumentamos espacio entre columnas */
    }

    /* Ajuste de alineación */
    .photo-section {
        justify-self: end;
        /* Alinea a la derecha */
    }

    .photo-preview {
        border: 2px dashed var(--border-color);
        border-radius: 8px;
        padding: 1rem;
        text-align: center;
    }

    #previewPhoto {
        width: 100%;
        max-width: 190px;
        max-height: 221px;
        height: auto;
        border-radius: 4px;
        margin-bottom: 1rem;
    }

    .upload-label {
        background: var(--secondary-color);
        color: white;
        padding: 0.6rem 1rem;
        border-radius: 4px;
        cursor: pointer;
        display: inline-block;
        width: 100%;
    }

    /* Especificaciones Técnicas */
    .tech-specs {
        display: grid;
        gap: 1.5rem;
        margin-top: 2rem;
    }

    .specs-group {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }

    .tech-select,
    .role-select,
    .level-select {
        width: 100%;
        padding: 0.8rem;
        border: 2px solid var(--border-color);
        border-radius: 4px;
    }

    /* Subcategorías */
    .subcategory-group {
        margin-top: 1.5rem;
        padding: 1rem;
        background: #f8f9fa;
        border-radius: 6px;
    }

    .specialization-options {
        display: flex;
        gap: 1.5rem;
        margin-top: 0.5rem;
    }

    /* Acciones */
    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 1rem;
        margin-top: 2rem;
    }

    .btn-print {
        background: #95a5a6;
        color: white;
        border: none;
        padding: 0.8rem 1.5rem;
        border-radius: 4px;
        cursor: pointer;
    }

    /* Estilos específicos para la disposición derecha de la imagen */
    .form-section-grid {
        display: grid;
        grid-template-columns: 1fr 300px;
        /* Campo de imagen más angosto */
        gap: 4rem;
        /* Mayor separación entre columnas */
        align-items: start;
    }

    .photo-section {
        position: sticky;
        top: 20px;
        background: #f8f9fa;
        padding: 1.5rem;
        border-radius: 10px;
        border: 2px solid #e0e0e0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .photo-preview {
        text-align: center;
    }

    #previewPhoto {
        width: 100%;
        max-width: 250px;
        height: auto;
        border-radius: 8px;
        margin-bottom: 1.5rem;
        border: 3px solid #fff;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .upload-label {
        background: #3498db;
        color: white;
        padding: 12px 20px;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-block;
        width: 80%;
        text-align: center;
    }

    .upload-label:hover {
        background: #2980b9;
        transform: translateY(-2px);
    }

    .form-group {
        margin-bottom: 1.5rem;
        position: relative;
        width: 100%;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: #2c3e50;
        font-size: 0.95rem;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 0.8rem 1.2rem;
        border: 2px solid #bdc3c7;
        border-radius: 6px;
        font-size: 1rem;
        transition: all 0.3s ease;
        background-color: #ffffff;
    }

    .form-group input:focus,
    .form-group select:focus {
        border-color: #3498db;
        box-shadow: 0 0 8px rgba(52, 152, 219, 0.2);
        outline: none;
    }


    @media (max-width: 992px) {
        .form-section-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .photo-section {
            position: static;
            order: 2;
            /* Imagen después de los campos en móviles */
            max-width: 400px;
            margin: 0 auto;
        }
    }

    /* Agrega esto a tu CSS */
    .subcategory-group {
        margin-top: 1.5rem;
        padding: 1.5rem;
        background: #ffffff;
        border-radius: 10px;
        border: 1px solid #e0e0e0;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .subcategory-group::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 4px;
        background: #3498db;
        transform: translateX(-4px);
        transition: transform 0.3s ease;
    }

    .subcategory-group:hover {
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border-color: #3498db;
    }

    .subcategory-group:hover::before {
        transform: translateX(0);
    }

    .subcategory-group label {
        display: block;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 1rem;
        font-size: 1.1rem;
        padding-left: 1rem;
        position: relative;
    }

    .subcategory-group label::after {
        content: "➤";
        position: absolute;
        left: -10px;
        color: #3498db;
        transition: transform 0.3s ease;
    }

    /* Estilos para las opciones */
    .specialization-options,
    .methodology-options {
        display: flex;
        gap: 1.5rem;
        flex-wrap: wrap;
        padding-left: 1rem;
    }

    .specialization-options label {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-weight: 500;
        padding: 0.8rem 1.2rem;
        background: #f8f9fa;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .specialization-options label:hover {
        background: #3498db;
        color: white;
        transform: translateY(-2px);
    }

    .specialization-options input[type="checkbox"] {
        width: 18px;
        height: 18px;
        accent-color: #3498db;
        cursor: pointer;
    }

    .methodology-options select {
        width: 100%;
        max-width: 250px;
        padding: 0.8rem;
        border: 2px solid #3498db;
        border-radius: 6px;
        background: white;
    }

    .subcategory-group.programming-languages {
        background: #f8faff;
        border-left: 4px solid #3498db;
        padding: 1.5rem;
        border-radius: 8px;
        position: relative;
        transition: transform 0.3s ease;
    }

    .subcategory-group.programming-languages:hover {
        transform: translateX(10px);
    }

    .custom-select-wrapper {
        position: relative;
        margin-top: 0.8rem;
    }

    .tech-select {
        width: 100%;
        padding: 1rem;
        border: 2px solid #bdc3c7;
        border-radius: 6px;
        appearance: none;
        background: white;
        font-size: 1rem;
        color: #2c3e50;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .tech-select:focus {
        border-color: #3498db;
        box-shadow: 0 0 10px rgba(52, 152, 219, 0.2);
        outline: none;
    }

    .select-arrow {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        width: 0;
        height: 0;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-top: 8px solid #3498db;
        pointer-events: none;
    }

    /* Efecto hover para el select */
    .tech-select:hover {
        border-color: #3498db;
        box-shadow: 0 2px 8px rgba(52, 152, 219, 0.1);
    }

    .alert-success {
        background: #e8f5e9;
        /* Fondo verde suave */
        border: 1px solid #81c784;
        /* Borde verde */
        color: #2e7d32;
        /* Texto en verde oscuro */
        padding: 1rem;
        border-radius: 6px;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 1rem;
    }


    /* Versión responsive */
    @media (max-width: 768px) {
        .subcategory-group.programming-languages {
            padding: 1rem;
        }

        .tech-select {
            padding: 0.8rem;
            font-size: 0.9rem;
        }
    }

    /* Versión responsive */
    @media (max-width: 768px) {
        .subcategory-group {
            padding: 1rem;
        }

        .specialization-options {
            flex-direction: column;
            gap: 1rem;
        }

        .specialization-options label {
            width: 100%;
            justify-content: space-between;
        }
    }

    @media (max-width: 768px) {
        .form-section-grid {
            grid-template-columns: 1fr;
        }


    }

    /* Responsive */
    @media (max-width: 768px) {}

    @media (max-width: 768px) {
        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            font-size: 0.9rem;
        }

        .form-group input,
        .form-group select {
            padding: 0.7rem 1rem;
        }

        .form-section-grid {
            grid-template-columns: 1fr;
        }

        .photo-section {
            order: 1;
            /* La imagen va después en móviles */
            justify-self: center;
        }

        .header-content {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
        }

        .specs-group {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection