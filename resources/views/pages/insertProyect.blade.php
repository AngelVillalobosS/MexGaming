@extends('index')
@section('content')
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

        <div class="form-group full-width">
            <label for="lider">Líder del Proyecto:</label>
            <input type="text" id="lider" name="lider">
        </div>

        <div class="form-group full-width">
            <button type="submit" class="submit-btn">Registrar Proyecto</button>
        </div>
    </form>
</section>

<style>
    :root {
        --primary-color: #2c3e50;
        --secondary-color: #3498db;
        --accent-color: #e74c3c;
        --text-color: #333;
        --border-color: #bdc3c7;
    }
    .project-registration {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 0 1rem;
    }

    .registration-title {
        display: flex;
        align-items: center;
        padding-left: 1rem;
        gap: 1rem;
        color: var(--primary-color);
        border-bottom: 2px solid var(--border-color);
        padding-bottom: 1rem;
    }

    .registration-form {
        background: #ffffff;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: #34495e;
        font-weight: 600;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 0.8rem;
        border: 2px solid #bdc3c7;
        border-radius: 6px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        border-color: #3498db;
        outline: none;
        box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
    }

    .form-group textarea {
        resize: vertical;
        min-height: 120px;
    }

    .form-row {
        display: grid;
        gap: 1.5rem;
        grid-template-columns: 1fr;
    }

    .submit-btn {
        background: #3498db;
        color: white;
        padding: 1rem 2rem;
        border: none;
        border-radius: 6px;
        font-size: 1.1rem;
        cursor: pointer;
        transition: background 0.3s ease;
        width: 100%;
        font-weight: 600;
    }

    .submit-btn:hover {
        background: #2980b9;
    }

    @media (min-width: 768px) {
        .registration-form {
            padding: 2.5rem;
        }

        .form-row {
            grid-template-columns: repeat(2, 1fr);
        }

        .submit-btn {
            width: auto;
            max-width: 300px;
            margin: 0 auto;
            display: block;
        }
    }

    @media (min-width: 1024px) {
        .project-registration {
            padding: 0 2rem;
        }
        
        .form-group {
            margin-bottom: 2rem;
        }
    }
</style>
@endsection