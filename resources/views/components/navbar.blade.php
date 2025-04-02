<header>
    <nav class="topnav">
        <a class="brand" href="{{ url('index')}}">MexGaming</a>

        <div class="nav-links">
            <a class="nav-btn {{ request()->routeIs('indexView') ? 'active' : '' }}" href="{{ route('indexView') }}">Inicio</a>
            <a class="nav-btn {{ request()->routeIs('insertEmployee') ? 'active' : '' }}" href="{{ route('insertEmployee') }}">Registrar Empleado</a>
            <a class="nav-btn {{ request()->routeIs('insertProjects') ? 'active' : '' }}" href="{{ route('insertProjects') }}">Registrar Proyectos</a>
            <a class="nav-btn {{ request()->routeIs('reportProjects') ? 'active' : '' }}" href="{{ route('reportProjects') }}">Reporte de Proyectos</a>
        </div>

        <div class="profile-section">
            <h6 class="profile-name">Angel Villalobos</h6>
            <img class="profile-pic" src="{{ asset('resources/images/picprof.jpg') }}" alt="Foto de perfil">
        </div>
    </nav>
</header>

<style>
    /* Estilos base */
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 2rem;
        background-color: #333;
        position: relative;
    }

    .brand {
        color: #fff;
        font-size: 1.5rem;
        text-decoration: none;
        padding: 1rem 0;
        margin-right: 2rem;
    }

    .nav-links {
        display: flex;
        flex-grow: 1;
    }

    .nav-btn {
        color: #f2f2f2;
        text-align: center;
        padding: 1.5rem 1.2rem;
        text-decoration: none;
        font-size: 1rem;
        transition: all 0.3s ease;
        position: relative;
    }

    .nav-btn:hover {
        background-color: #ddd;
        color: #333;
    }

    /* Modificar esta regla */
    .nav-btn.active {
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff;
    }

    .nav-btn.active::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 3px;
        background-color: #fff;
        transition: all 0.3s ease;
    }

    .profile-section {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-left: auto;
        padding: 0 1rem;
    }

    .profile-name {
        color: #fff;
        margin: 0;
        font-size: 0.9rem;
    }

    .profile-pic {
        height: 2.5rem;
        width: 2.5rem;
        border-radius: 50%;
        object-fit: cover;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .topnav {
            flex-wrap: wrap;
            padding: 1rem;
        }

        .nav-links {
            order: 3;
            width: 100%;
            justify-content: center;
            margin-top: 1rem;
        }

        .profile-section {
            margin-left: 0;
            order: 2;
        }

        .brand {
            order: 1;
        }

        .nav-btn {
            padding: 1rem 0.8rem;
            font-size: 0.9rem;
        }
    }

    @media (max-width: 480px) {
        .nav-links {
            flex-wrap: wrap;
        }

        .nav-btn {
            flex: 1 0 50%;
            padding: 0.8rem;
        }

        .profile-name {
            display: none;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Seleccionar todos los botones de navegación
        const navButtons = document.querySelectorAll('.nav-btn');

        // Función para manejar el click
        function handleNavClick(event) {
            // Remover clase active de todos los botones
            navButtons.forEach(btn => btn.classList.remove('active'));
            // Añadir clase active al botón clickeado
            event.target.classList.add('active');
        }

        // Añadir event listener a cada botón
        navButtons.forEach(button => {
            button.addEventListener('click', handleNavClick);
        });
    });
</script>