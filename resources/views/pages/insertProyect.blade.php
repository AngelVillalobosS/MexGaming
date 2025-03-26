<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Proyecto - MexGaming</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>MexGaming</h1>
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/proyectos">Proyectos</a></li>
                <li><a href="/reportes">Reporte</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Registro de Proyecto</h2>
            <form action="/proyectos" method="POST">
                <label for="nombre_proyecto">Nombre del Proyecto:</label>
                <input type="text" id="nombre_proyecto" name="nombre_proyecto" required>
                
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" required></textarea>
                
                <label for="fecha_inicio">Fecha de Inicio:</label>
                <input type="date" id="fecha_inicio" name="fecha_inicio" required>
                
                <label for="fecha_cierre">Fecha de Cierre:</label>
                <input type="date" id="fecha_cierre" name="fecha_cierre" required>
                
                <label for="lider">Líder del Proyecto:</label>
                <input type="text" id="lider" name="lider">
                
                <button type="submit">Registrar Proyecto</button>
            </form>
        </section>
    </main>
    <footer>
        
    </footer>
</body>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

header {
    background-color: #333;
    color: white;
    padding: 15px;
    text-align: center;
}

nav ul {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
    gap: 15px;
}

nav ul li {
    display: inline;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}

main {
    max-width: 60%;
    margin: 20px auto;
    padding: 20px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

label {
    font-weight: bold;
}

input, textarea {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
}

button {
    background-color: #333;
    color: white;
    border: none;
    padding: 10px;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #666;
}

footer {
    text-align: center;
    padding: 10px;
    background-color: #333;
    color: white;
    margin-top: 20px;
}

</style>
</html>