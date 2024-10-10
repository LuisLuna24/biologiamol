<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class metodos extends Model
{
    protected $table ='metodos';
    protected $fillable = [
        'nombre', 'estatus'
    ];
    use HasFactory;
}
