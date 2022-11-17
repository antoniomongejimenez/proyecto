<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mostrar tipos de productos') }}
        </h2>
    </x-slot>

    <x-plantilla>
        <table class="table-auto">
            <thead>
                <th class="px-6 py-2 text-gray-500">
                    Denominación
                </th>
            </thead>
            <tbody>
                <tr>
                    <td class="px-6 py-2">{{ $tipo->denominación }}</td>
                </tr>
            </tbody>
        </table>
        <form action="{{ route('tipos.index') }}">
            <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Volver
            </button>
         </form>
    </x-plantilla>

</x-app-layout>
