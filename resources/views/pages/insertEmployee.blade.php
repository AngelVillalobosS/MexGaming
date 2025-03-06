<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('resources/css/inserts.css')}}">
    <link rel="stylesheet" href="{{url('resources/css/tables.css')}}">
    <title>Registrar Empleado</title>
</head>
<body>
@include('components.navbar')

<h1>Registro de Empleados</h1>
<br>
<table id="t1" class="tableRecords">
    <tr>
        <th>Nombre:</th>
        <td><input type="text" class="txtCell" name="name" id="nameEmployee"></td>
    </tr>
    
    <tr>
        <th>Apellido Paterno:</th>
        <td><input type="text" class="txtCell" name="lastnameEmployee" id="lastnameEmployee"></td>
    </tr>
    <tr>
        <th>Apellido Materno:</th>
        <td><input type="text" class="txtCell" name="" id=""></td>
    </tr>
    <tr>
        <th>Nivel:</th>
        <td>
            <select name="level" id="levelEmployee" class="comboBox">
                <option  value="J">Junior</option>
                <option  value="SSR">Semi-Senior (SSR)</option>
                <option  value="SR">Senior (SR)</option>
            </select>
        </td>
    </tr>
    <td id="picture">wasa</td>
</table>
</body>
</html>