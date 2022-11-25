<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-plantilla>
                        <form class="mb-3" action="{{ route('productos.create') }}">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-1 border border-blue-500 rounded">
                                Crear nuevo producto
                            </button>
                        </form>
                        <table class="table-auto ">
                            <thead>
                                <th class="border border-black px-6 py-2 text-gray-500">
                                    Código
                                </th>
                                <th class="border border-black px-6 py-2 text-gray-500">
                                    Denominación
                                </th>
                                <th class="border border-black px-6 py-2 text-gray-500">
                                    Descripción
                                </th>
                                <th class="border border-black px-6 py-2 text-gray-500">
                                    Precio
                                </th>
                                <th class="border border-black px-6 py-2 text-gray-500">
                                    Deporte
                                </th>
                                <th class="border border-black px-6 py-2 text-gray-500">
                                    Tipo
                                </th>
                                <th class="border border-black px-6 py-2 text-gray-500">
                                    Marca
                                </th>
                                <th class="border border-black px-6 py-2 text-gray-500">
                                    Tipo persona
                                </th>
                                <th class="border border-black px-6 py-2 text-gray-500">
                                    Borrar
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($productos as $producto)
                                    <tr>
                                        <td class="border border-black text-center px-6 py-4">
                                            <a href="{{ route('productos.show', $producto) }}">{{ $producto->codigo }}</a>
                                        </td>
                                        <td class="border border-black text-center px-6 py-4">
                                            <a href="{{ route('productos.show', $producto) }}">{{ $producto->denominación }}</a>
                                        </td>
                                        <td class="border border-black text-center px-6 py-4">
                                            <a href="{{ route('productos.show', $producto) }}">{{ $producto->descripción }}</a>
                                        </td>
                                        <td class="border border-black text-center px-6 py-4">
                                            <a href="{{ route('productos.show', $producto) }}">{{ $producto->precio }}€</a>
                                        </td>
                                        <td class="border border-black text-center px-6 py-4">
                                            <a href="{{ route('deportes.show', $producto->deporte->id) }}">{{ $producto->deporte->denominación }}</a>
                                        </td>
                                        <td class="border border-black text-center px-6 py-4">
                                            <a href="{{ route('tipos.show', $producto->tipo->id) }}">{{ $producto->tipo->denominación }}</a>
                                        </td>
                                        <td class="border border-black text-center px-6 py-4">
                                            <a href="{{ route('marcas.show', $producto->marca->id) }}">{{ $producto->marca->denominación }}</a>
                                        </td>
                                        <td class="border border-black text-center px-6 py-4">
                                            <a href="{{ route('tipospersonas.show', $producto->tiposPersona->id) }}">{{ $producto->tiposPersona->denominación }}</a>
                                        </td>
                                        <td class="border border-black text-center px-6 py-4">
                                            <div class="text-sm text-gray-900 ">
                                                <form action="{{ route('productos.destroy', $producto) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="px-4 py-1 text-sm text-black bg-red-400 rounded">Borrar</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </x-plantilla>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
