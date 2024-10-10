<div>
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
        <x-button-new wire:click="new_register"></x-button-new>
    </div>
    <x-table>
        <x-slot name="titles">
            <x-th>ID</x-th>
            <x-th>Nombre</x-th>
            <x-th>Versiones</x-th>
            <x-th>Editar</x-th>
            <x-th>Estatus</x-th>
        </x-slot>
        <x-slot name="rows">
            @if ($count != 0)
                @foreach ($datos as $dato)
                    <x-tr>
                        <x-td wire:key="{{ $dato->id }}">{{ $dato->id }}</x-td>
                        <x-td>{{ $dato->nombre }}</x-td>
                        <x-td>{{ $dato->version }}</x-td>
                        <x-td>
                            <x-button-edit wire:click="version_register({{ $dato->id }})">
                            </x-button-edit>
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
</div>
