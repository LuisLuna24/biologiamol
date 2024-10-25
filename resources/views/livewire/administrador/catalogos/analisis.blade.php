<div>
    <x-message />
    <div class="flex flex-row gap-3 mb-3 items-end">
        <div class="flex flex-col">
            <label for="view_dates">Datos:</label>
            <x-select wire:model.live="view_dates">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
            </x-select>
        </div>
        <div class="flex flex-col w-full">
            <label for="">Datos:</label>
            <x-input type="text" wire:model.live="search" placeholder="Buscar nombre" />
        </div>
        <x-button-new wire:click="add_register"></x-button-new>
    </div>
    <x-table>
        <x-slot name="titles">
            <x-th>No.</x-th>
            <x-th>Nombre</x-th>
            <x-th>Versiones</x-th>
            <x-th>Editar</x-th>
            <x-th>Versiones</x-th>
            <x-th>Estatus</x-th>
        </x-slot>
        <x-slot name="rows">
            @if ($count != 0)
                @foreach ($datos as $index=> $dato)
                    <x-tr>
                        <x-td wire:key="ana-{{ $dato->id }}">{{ $index+1 }}</x-td>
                        <x-td>{{ $dato->nombre }}</x-td>
                        <x-td>{{ $dato->version }}</x-td>
                        <x-td>
                            <x-button-edit wire:click="edit_register({{ $dato->id }})">
                            </x-button-edit>
                        </x-td>
                        <x-td>
                            <x-button-version wire:click="version_register({{ $dato->id }})">
                            </x-button-version>
                        </x-td>
                        <x-td>
                            @switch($dato->estatus)
                                @case(0)
                                    <x-button-status-danger wire:click="estatus_register({{ $dato->id }})">
                                    </x-button-status-danger>
                                @break

                                @case(1)
                                    <x-button-status-chek wire:click="estatus_register({{ $dato->id }})">
                                    </x-button-status-chek>
                                @break

                                @default
                            @endswitch
                        </x-td>
                    </x-tr>
                @endforeach
            @else
                <x-tr>
                    <x-td colspan="5">No se encontraron resultados.</x-td>
                </x-tr>
            @endif
        </x-slot>
    </x-table>
    <div class="my-3">
        {{$datos->links()}}
    </div>

    <x-dialog-modal wire:model="new">
        <x-slot name='title'>
            <h2 class="text-center">Nuevo Análisis</h2>
        </x-slot>
        <x-slot name='content'>
            <form wire:submit="new_register">
                <div>
                    <label for="nombre">Nombre:</label>
                    <x-input id="nombre" class="block mt-1 w-full" type="text" wire:model="nombre" placeholder="Nombre del análisis" required />
                    <x-input-error for="nombre" />
                </div>
                <div class="mt-5 flex justify-around">
                    <x-button>Guardar</x-button>
                    <x-danger-button wire:click="new_cancel">Cancelar</x-danger-button>
                </div>
            </form>
        </x-slot>
        <x-slot name='footer'></x-slot>
    </x-dialog-modal>

    <x-dialog-modal wire:model="edit">
        <x-slot name='title'>
            <h2 class="text-center">Editar Análisis</h2>
        </x-slot>
        <x-slot name='content'>
            <form wire:submit="update_register">
                <div>
                    <label for="nombre">Nombre:</label>
                    <x-input id="nombre" class="block mt-1 w-full" type="text" wire:model="nombre_anterior" placeholder="Nombre del análisis" required />
                    <x-input-error for="nombre_anterior" />
                </div>
                <div>
                    <label for="nombre">Razón de cambio:</label>
                    <x-input id="nombre" class="block mt-1 w-full" type="text" wire:model="razon" placeholder="Nombre del análisis" required />
                    <x-input-error for="razon" />
                </div>
                <div class="mt-5 flex justify-around">
                    <x-button>Guardar</x-button>
                    <x-danger-button wire:click="edit_cancel">Cancelar</x-danger-button>
                </div>
            </form>
        </x-slot>
        <x-slot name='footer'></x-slot>
    </x-dialog-modal>

    <x-dialog-modal wire:model="version">
        <x-slot name='title'>
            <h2 class="text-center">Editar Análisis</h2>
        </x-slot>
        <x-slot name='content'>
            @livewire('administrador.catalogos.componentes.analisis.versiones', ['versionId' => $versionId])
            
        </x-slot>
        <x-slot name='footer'>
            <x-danger-button wire:click="version_cancel">Cerrar</x-danger-button>
        </x-slot>
    </x-dialog-modal>
</div>
