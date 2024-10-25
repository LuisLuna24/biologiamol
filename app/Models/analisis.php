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

    //version analisis
    public function versionanalisis(){
        return $this->hasMany(version_analisis::class, 'id','analisis_id');
    }
    
    use HasFactory;
}
