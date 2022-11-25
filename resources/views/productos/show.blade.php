<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $producto->denominación}}
        </h2>
    </x-slot>
    <div class="ml-5 mt-5 bg-white">
        <div class="ml-5">
            <h1 class="text-md mb-3">Detalles del producto:</h1>
            <h3><strong>Código:  </strong>{{ $producto->codigo }}</h3>
            <h3><strong>Denominación: </strong>{{ $producto->denominación }}</h3>
            <h3><strong>Descripción: </strong> {{ $producto->descripción }}</h3>
            <h3><strong>Precio: </strong> {{ $producto->precio }}€</h3>
            <h3><strong>Deporte: </strong> {{ $producto->deporte->denominación }}</h3>
            <h3><strong>Tipo: </strong> {{ $producto->tipo->denominación }}</h3>
            <h3><strong>Marca: </strong> {{ $producto->marca->denominación }}</h3>
            <h3><strong>Tipo persona: </strong> {{ $producto->tiposPersona->denominación }}</h3>
            <div class="flex mt-4">
                <form class="mr-3" action="{{ route('productos.edit', $producto) }}">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibol px-1 py-1 border border-blue-500 hover:border-transparent rounded">
                        Editar
                    </button>
                 </form>
                 <form class="mr-3" action="{{ route('productos.destroy', $producto) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-semibol px-1 py-1 border border-red-500 hover:border-transparent rounded">
                        Borrar
                    </button>
                </form>
                <form action="{{ route('productos.index') }}">
                    <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-1 border border-blue-500 hover:border-transparent rounded">
                        Volver
                    </button>
                 </form>
            </div>
        </div>
    </div>


</x-app-layout>
