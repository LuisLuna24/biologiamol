<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipos extends Model
{
    protected $table = 'equipos';

    protected $fillable = [
        'no_inventario', 'nombre', 'descripcion', 'estatus'
    ];
    
    use HasFactory;
}
