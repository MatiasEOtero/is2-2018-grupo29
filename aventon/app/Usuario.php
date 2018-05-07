<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'name', 'apellido', 'email', 'fechanacimiento', 'password', 'calificacion', 'cuenta', 'deudapenalizado', 'deudacalificacion', 'baja'
    ];
}
