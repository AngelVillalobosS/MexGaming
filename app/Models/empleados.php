<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    // Especifica el nombre de la tabla si no es el plural del modelo.
    protected $table = 'empleados';

    // Configura la llave primaria (por defecto es 'id')
    protected $primaryKey = 'id_empleado';

    // Campos asignables en masa (asegúrate de incluir todos los campos que usarás)
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'edad',
        'rol',
        'nivel',
        'lenguaje',
        'especializacion',
        'metodologia',
        'foto'
    ];
}
