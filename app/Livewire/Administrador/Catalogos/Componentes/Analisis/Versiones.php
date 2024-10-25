<?php

namespace App\Livewire\Administrador\Catalogos\Componentes\Analisis;

use App\Models\version_analisis;
use Livewire\Attributes\Reactive;
use Livewire\Component;
use Livewire\WithPagination;

class Versiones extends Component
{

    //&================================================================= Paginacion
    use WithPagination;

    #[Reactive]
    public $versionId;


    public function render()
    {
        $count=version_analisis::where('analisis_id',$this->versionId)->count();
        $datos=version_analisis::where('analisis_id',$this->versionId)->paginate(10);
        return view('livewire.administrador.catalogos.componentes.analisis.versiones',compact('count', 'datos'));
    }
}
