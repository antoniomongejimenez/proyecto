<x-app-layout>
    <div class="h-screen bg-gray-300">
        <div class="py-12">
        <div class="max-w-md mx-auto bg-gray-100 shadow-lg rounded-lg  md:max-w-5xl">
            <div class="md:flex ">
                <div class="w-full p-4 px-5 py-5">
                    <div class="md:grid md:grid-cols-3 gap-2 ">
                        <div class="col-span-3 p-5">
                            <h1 class="text-xl font-medium ">Carrito</h1>
                            @foreach ($carritos as $carrito)
                            <div class="flex justify-between items-center mt-6 pt-6 border-b">
                                <div class="flex items-center">
                                    <img src="https://i.imgur.com/EEguU02.jpg" width="60" class="rounded-full ">
                                    <div class="flex flex-col ml-3">
                                        <span class="md:text-md font-medium">{{$carrito->producto->denominación}}</span>
                                        <span class="text-xs font-light text-gray-400">Precio unidad: {{$carrito->producto->precio}}€</span>
                                    </div>
                                </div>
                                <div class="flex justify-center items-center">
                                    <div class="pr-8 flex ">
                                        <span class="font-semibold">-</span>
                                        <input type="text" class="focus:outline-none bg-gray-100 border h-6 w-8 rounded text-sm px-2 mx-2" value="{{$carrito->cantidad}}">
                                        <form action="{{route('lineaCarrito.sumar', $carrito->producto_id)}}" method="post">
                                            @csrf
                                            @method('POST')
                                            <button class="inline-flex text-black h-6 px-3 justify-center items-center" type="submit">+</button>
                                        </form>
                                    </div>
                                    <div class="pr-8 ">
                                        <span class="text-xs font-medium">{{$carrito->producto->precio * $carrito->cantidad}}€</span>
                                    </div>
                                    <div>
                                        <i class="fa fa-close text-xs font-medium"></i>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="flex justify-between items-center mt-6 pt-6 border-t">
                                <div class="flex items-center">
                                    <i class="fa fa-arrow-left pr-2"></i>
                                    <a class="text-md  font-medium text-blue-500" href="/productos/comprador">Continuar comprando</a>
                                </div>
                                <div class="flex justify-center items-end">
                                    <span class="text-sm font-medium text-gray-400 mr-1">Precio total:</span>
                                    <span class="text-lg font-bold text-gray-800 "> {{$total}}€</span>
                                </div>
                            </div>
                        </div>

                    </div>
               </div>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>
