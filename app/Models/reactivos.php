<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reactivos extends Model
{
    protected $table ='reactivos';

    protected $fillable = [
        'lote', 'nombre', 'descripcion', 'stock','caducidad', 'estatus'
    ];
    
    use HasFactory;
}
