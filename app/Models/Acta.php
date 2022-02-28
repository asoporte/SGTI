<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acta extends Model
{
    use HasFactory;
    protected $fillable = [
        'Usuario',
        'Ubicacion',
        'Tipo_Solicitud',
        'Fecha',
        'Descripcion',
        'Serial',
        'Equipo',
        'Responsable',
        'Version',
        'Observacion',
        'Documento'
    ];

}
