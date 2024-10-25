<x-panel>
    <x-slot:titulo>
        {{__('Análisis')}}
    </x-slot>
    @livewire('administrador.catalogos.analisis',[
        //id de usuario
        'usuario_id' => Auth::user()->id,
    ])
</x-panel>
