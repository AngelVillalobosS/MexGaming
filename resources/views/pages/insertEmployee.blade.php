<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('resources/css/inserts.css')}}">
    <link rel="stylesheet" href="{{asset('resources/css/tables.css')}}">
    <title>Registrar Empleado</title>
</head>

<body>
    @include('components.navbar')

    <h1>Registro de Empleados</h1>
    <br>
    <table id="t1" class="tableRecords">
        <tr>
            <th>wwa</th>
            <th>wwa</th>
        </tr>
        <tr>
            <td>Nombre:</td>
            <td><input type="text" class="txtCell" name="name" id="nameEmployee"></td>
        </tr>

        <tr>
            <td>Apellido Paterno:</td>
            <td><input type="text" class="txtCell" name="lastnameEmployee" id="lastnameEmployee"></td>
        </tr>
        <tr>
            <td>Apellido Materno:</td>
            <td><input type="text" class="txtCell" name="" id=""></td>
        </tr>
        <tr>
            <div class="uploadImgEmployee">
            <td></td>
            <td></td>
            <td>
                <img src="{{ asset('resources/images/stock/dftl_employee.png') }}" alt="Imagen del empleado" class="imgEmployee"> <br>
                <h1>wasa</h1>
            </td>
            </div>
        </tr>
        <tr>
            <td>Nivel:</td>
            <td>
                <select name="level" id="levelEmployee" class="comboBox">
                    <option value="J">Junior</option>
                    <option value="SSR">Semi-Senior (SSR)</option>
                    <option value="SR">Senior (SR)</option>
                </select>
            </td>
        </tr>
    </table>
</body>

</html>