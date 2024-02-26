<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'razon_social',
        'cedula',
        'telefono',
        'pais',
        'ciudad',
    ];

    public static $rules = [
        'nombre' => 'required|string',
        'apellido' => 'required|string',
        'razon_social' => 'required|string',
        'cedula' => 'required|string',
        'telefono' => 'required|string',
        'pais' => 'required|string',
        'ciudad' => 'required|string',
    ];

}
