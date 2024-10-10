<?php

namespace App\Livewire\Administrador\Catalogos;

use App\Models\analisis as ModelsAnalisis;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use Livewire\WithPagination;

#[Lazy()]
class Analisis extends Component
{
    //&================================================================= Paginacion
    use WithPagination;


    //&================================================================= Filtros

    public $view_dates='10';
    public $search='';

    public function render()
    {
        $count=ModelsAnalisis::count();
        $datos = ModelsAnalisis::orderBy('nombre')->paginate(10);
        return view('livewire.administrador.catalogos.analisis',compact('count', 'datos'));
    }
}
