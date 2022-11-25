<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear producto') }}
        </h2>
    </x-slot>
    <x-plantilla>
        <form action="{{ route('productos.store', [], false) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-4">
                <label for="deporte_id"
                    class="text-sm font-medium text-gray-900 block mb-2 @error('deporte_id') text-red-500 @enderror">
                    Deporte
                </label>
                <select name="deporte_id" id="deporte_id">
                    @foreach ($deportes as $deporte)
                        <option value="{{$deporte->id}}">{{$deporte->denominación}}</option>
                    @endforeach
                  </select>
                @error('deporte_id')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="tipo_id"
                    class="text-sm font-medium text-gray-900 block mb-2 @error('tipo_id') text-red-500 @enderror">
                    Tipo
                </label>
                <select name="tipo_id" id="tipo_id">
                    @foreach ($tipos as $tipo)
                        <option value="{{$tipo->id}}">{{$tipo->denominación}}</option>
                    @endforeach
                  </select>
                @error('tipo_id')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="marca_id"
                    class="text-sm font-medium text-gray-900 block mb-2 @error('marca_id') text-red-500 @enderror">
                    Marca
                </label>
                <select name="marca_id" id="marca_id">
                    @foreach ($marcas as $marca)
                        <option value="{{$marca->id}}">{{$marca->denominación}}</option>
                    @endforeach
                  </select>
                @error('marca_id')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="tipos_persona_id"
                    class="text-sm font-medium text-gray-900 block mb-2 @error('tipos_persona_id') text-red-500 @enderror">
                    Tipo de persona
                </label>
                <select name="tipos_persona_id" id="tipos_persona_id">
                    @foreach ($tiposPersonas as $tiposPersona)
                        <option value="{{$tiposPersona->id}}">{{$tiposPersona->denominación}}</option>
                    @endforeach
                  </select>
                @error('tipos_persona_id')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="codigo"
                    class="text-sm font-medium text-gray-900 block mb-2 @error('codigo') text-red-500 @enderror">
                    Código (10 dígitos)
                </label>
                <input type="number" min="1" name="codigo" id="codigo"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('codigo') border-red-500 @enderror"
                    value="{{ old('codigo', $producto->codigo) }}">
                @error('codigo')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="denominación"
                    class="text-sm font-medium text-gray-900 block mb-2 @error('denominación') text-red-500 @enderror">
                    Denominación
                </label>
                <input type="text" name="denominación" id="denominación"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('denominación') border-red-500 @enderror"
                    value="{{ old('denominación', $producto->denominación) }}">
                @error('denominación')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="descripción"
                    class="text-sm font-medium text-gray-900 block mb-2 @error('descripción') text-red-500 @enderror">
                    Descripción
                </label>
                <input type="text" name="descripción" id="descripción"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('descripción') border-red-500 @enderror"
                    value="{{ old('descripción', $producto->descripción) }}">
                @error('descripción')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="precio"
                    class="text-sm font-medium text-gray-900 block mb-2 @error('precio') text-red-500 @enderror">
                    Precio
                </label>
                <input type="number"  step="any" min="0" name="precio" id="precio"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('precio') border-red-500 @enderror"
                    value="{{ old('precio', $producto->precio) }}">
                @error('precio')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Enviar</button>
        </form>
    </x-plantilla>
</x-app-layout>
