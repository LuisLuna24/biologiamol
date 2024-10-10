<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class especies extends Model
{
    protected $table = 'especies';
    protected $fillable = [
        'nombre', 'estatus'
    ];
    use HasFactory;
}
