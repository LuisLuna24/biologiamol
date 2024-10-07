<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rutas extends Model
{

    protected $table = 'rutas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre','descripcion', 'route', 'tipo', 'usuario', 'estatus',
    ];


    use HasFactory;
}