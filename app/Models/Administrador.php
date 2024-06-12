<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','numero_documento','tipo_documento','apellido','telefono', 'correo','direccion'];
}