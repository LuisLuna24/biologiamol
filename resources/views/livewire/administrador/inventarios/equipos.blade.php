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
            <x-input type="text" wire:model.live="search" placeholder="Buscar no. inventario o nombre" />
        </div>
        <x-button wire:click="new_register"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-square-rounded-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" /><path d="M15 12h-6" /><path d="M12 9v6" /></svg> <span class="ml-2">Nuevo</span></x-button>
    </div>
    <x-table>
        <x-slot name="titles">
            <x-th>No. Inventario</x-th>
            <x-th>Nombre</x-th>
            <x-th>Descripción</x-th>
            <x-th>Versiones</x-th>
            <x-th>Editar</x-th>
            <x-th>Estatus</x-th>
        </x-slot>
        <x-slot name="rows">
            <x-tr>
                <x-td>Hola</x-td>
            </x-tr>
        </x-slot>
    </x-table>
</div>
