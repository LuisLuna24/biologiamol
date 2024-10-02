<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nivel_usuario extends Model
{
    protected $table = 'nivel_usuarios';
    protected $fillable = [
        'descripcion',
    ];
    use HasFactory;


}
