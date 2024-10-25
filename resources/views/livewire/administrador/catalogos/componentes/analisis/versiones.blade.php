<div>
    <x-table>
        <x-slot name="titles">
            <x-th>No.</x-th>
            <x-th>Nombre</x-th>
            <x-th>Nombre Anterior</x-th>
            <x-th>Razon Cambio</x-th>
        </x-slot>
        <x-slot name="rows">
            @if ($count != 0)
                @foreach ($datos as $index=> $dato)
                    <x-tr>
                        <x-td wire:key="ana-{{ $dato->id }}">{{ $index+1 }}</x-td>
                        <x-td>{{ $dato->nombre }}</x-td>
                        <x-td>{{ $dato->nombre_anterior }}</x-td>
                        <x-td>{{ $dato->razon_cambio }}</x-td>
                    </x-tr>
                @endforeach
            @else
                <x-tr>
                    <x-td colspan="5">No se encontraron resultados.</x-td>
                </x-tr>
            @endif
        </x-slot>
    </x-table>
</div>
