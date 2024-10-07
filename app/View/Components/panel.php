<?php

namespace App\View\Components;


use App\Models\rutas;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class panel extends Component
{
    /**
     * Create a new component instance.
     */

     public $rutas;
     public $usuario;

    public $titulo;
    public function __construct()
    {
        switch (Auth::user()->nivel_usuario) {

            case 1:
                $this->rutas = rutas::where('estado', 1)->where('usuario', 1)->orderBy('nombre', 'asc')->get();
                break;

            case 2:
                $this->rutas = rutas::where('estado', 1)->where('usuario', 2)->orderBy('nombre', 'asc')->get();
                break;
        }

        $this->usuario=Auth::user();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.panel');
    }
}
