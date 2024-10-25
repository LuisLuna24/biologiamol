<?php

namespace App\Livewire\Administrador\Catalogos;

use App\Models\analisis as ModelsAnalisis;
use App\Models\User;
use App\Models\version_analisis;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Reactive;
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

    //&================================================================= Agregar Registro

    public $new = false;
    public $nombre='';
    public function add_register(){
        $this->new = true;
    }

    public function new_register(){

        $this->validate([
            'nombre' => ['required', 'string', 'max:50','unique:analises,nombre'],
        ]);

        try {

            ModelsAnalisis::create([
                'nombre' => $this->nombre,
            ]);

            DB::commit();
            $this->new = false;
            session()->flash('green', 'Agregada correctamente');
            $this->reset('nombre');
        }catch(\Exception $e){

            DB::rollback();
            abort(500);
        }
    }

    public function new_cancel(){
        $this->new = false;
        $this->reset('nombre');

    }

    //&================================================================= Editar Registro
    public $edit=false;
    public $editId='';

    #[Reactive]
    public $usuario_id;

    public $nombre_anterior,$razon;
    public function edit_register($id){
        $this->edit = true;
        $this->editId=$id;
        $analisis=ModelsAnalisis::find($id);
        $this->nombre_anterior=$analisis->nombre;
    }

    public function update_register(){
        $this->validate([
            'nombre_anterior' => ['required','string','max:50','unique:analises,nombre,'.$this->editId],
            'razon' => ['required','string','max:250'],
        ],[
            'nombre_anterior.unique' => 'El nombre del analisis ya existe',
            'nombre_anterior.max' => 'El nombre del analisis no puede superar los 50 caracteres',
            'nombre_anterior.required' => 'El nombre anterior es requerido',
            'razon.required' => 'La razón del cambio es requerida',
            'razon.max' => 'La razón del cambio no puede superar los 250 caracteres',
        ]);

        try {
            $analisis=ModelsAnalisis::find($this->editId);
            
            $version=version_analisis::create([
                'analisis_id' => $analisis->id,
                'nombre' => $this->nombre_anterior,
                'nombre_anterior' => $analisis->nombre,
                'razon_cambio' => $this->razon,
                'user_id' => $this->usuario_id
            ]);

            ModelsAnalisis::updateOrCreate([
                'id' => $this->editId,
            ], [
                'nombre' => $this->nombre_anterior,
                'version' => $analisis->version+1
            ]);


            DB::commit();
            $this->edit = false;
            session()->flash('green', 'Agregada correctamente');
            $this->reset('nombre_anterior','razon');
        }catch(\Exception $e){

            DB::rollback();
            //abort(500);
            dd($e);
        }
    }


    //&================================================================= Versiones

    public $version=false;
    public $versionId='';
    public function version_register($id){
        $this->version = true;
        $this->versionId=$id;
    }

    public function version_cancel(){
        $this->version = false;
        $this->versionId='';
    }

    //&================================================================= Lazy Load
    public function placeholder()
    {
        return view('livewire.placeholders.skeleton');
    }

    //&================================================================= render
    public function render()
    {
        $count=ModelsAnalisis::count();
        $datos = ModelsAnalisis::orderBy('nombre')->paginate(10);
        return view('livewire.administrador.catalogos.analisis',compact('count', 'datos'));
    }
}
