<header>
        <div class="topnav">
            <a class="title" href="{{ url('index')}}">MexGaming</a>
            <a class="active nav-btn" href="{{ url('index')}}">Inicio</a>
            <a class="nav-btn" href="{{ url('insertEmployee')}}">Registrar Empleado</a>
            <a class="nav-btn" href="#contact">Registrar Proyectos</a>
            <a class="nav-btn" href="#contact">Reporte de Proyectos</a>

            <h6 class="profile-data">Angel Villalobos</h6>
            <img class="profile-pic" src="{{ asset('resources/images/picprof.jpg') }}" alt="Foto de perfil">
        </div>
    </header>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        .profile-data{
            float: left;
            color: #ddd;
            /* border: #04AA6D 1px solid; */
            width: fit-content;
            margin-left: 30%;
            margin-right: 1.2em;
        }
        .profile-pic{
            float: left;
            vertical-align: middle;
            height: 6vh;
            border-radius: 50% 50%;
        }
        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .title {
            float: left;
            color: #f2f2f2;
            font-size: 12px;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            margin-right: 20%;
            /* border: #04AA6D 1px solid; */
        }

        .topnav .nav-btn {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav .nav-btn:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav .nav-btn.active {
            border-bottom: #fff 2px solid;
            margin-bottom: 3px;
            color: white;
        }
    </style>