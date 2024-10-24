<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class analisis extends Model
{
    protected $table = 'analises';
    protected $fillable = [
        'nombre', 'estatus','version'
    ];
    use HasFactory;
}
