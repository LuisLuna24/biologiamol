<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class version_analisis extends Model
{


    protected $table ='version_analises';
    protected $fillable = [
        'analisis_id', 'nombre', 'nombre_anterior', 'razon_cambio', 'user_id'
    ];

    //relacion con analisis
    public function analisis(){
        return $this->belongsTo(Analisis::class, 'analisis_id','id');
    }

    //usuario
    public function usuario(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
    use HasFactory;
}
