<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLineaCarritoRequest;
use App\Http\Requests\UpdateLineaCarritoRequest;
use App\Models\LineaCarrito;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;

class LineaCarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carritos = LineaCarrito::all()->where('user_id', auth()->user()->id)->sortBy('created_at');

        $preciototal = 0;
        foreach ($carritos as $carrito){
            $preciototal = $preciototal + $carrito->producto->precio * $carrito->cantidad;
        }

        return view('lineacarritos.index', [
            'carritos' => $carritos,
            'preciototal' => $preciototal,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLineaCarritoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLineaCarritoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LineaCarrito  $lineaCarrito
     * @return \Illuminate\Http\Response
     */
    public function show(LineaCarrito $lineaCarrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LineaCarrito  $lineaCarrito
     * @return \Illuminate\Http\Response
     */
    public function edit(LineaCarrito $lineaCarrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLineaCarritoRequest  $request
     * @param  \App\Models\LineaCarrito  $lineaCarrito
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLineaCarritoRequest $request, LineaCarrito $lineaCarrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LineaCarrito  $lineaCarrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(LineaCarrito $lineaCarrito)
    {
        //
    }

    public function meter( Producto $producto)
    {

        $carrito = $carrito = LineaCarrito::where('producto_id', $producto->id)->where('user_id', auth()->user()->id)->get();

        if ($carrito->isEmpty()) {
            $carrito = new LineaCarrito();
            $carrito->user_id = Auth::user()->id;
            $carrito->producto_id = $producto->id;
            $carrito->cantidad = 1;
            $carrito->save();

            return redirect()->route('lineaCarritos.index')->with('success', 'Producto añadido al carrito.');

        }

        $carrito[0]->cantidad +=1;
        $carrito[0]->save();

        return redirect()->route('lineaCarritos.index')->with('success', 'Producto añadido al carrito.');
    }

    public function sumar(Producto $producto)
    {
        $carrito = $carrito = LineaCarrito::where('producto_id', $producto->id)->where('user_id', auth()->user()->id)->get();

        $carrito[0]->cantidad +=1;
        $carrito[0]->save();

        return redirect()->route('lineaCarritos.index')->with('success', 'Producto sumado al carrito.');
    }

    public function restar(Producto $producto)
    {
        $carrito = $carrito = LineaCarrito::where('producto_id', $producto->id)->where('user_id', auth()->user()->id)->get();

        if ($carrito[0]->cantidad === 1) {
            $carrito[0]->delete();

            return redirect()->route('lineaCarritos.index')->with('success', 'Producto eliminado del carrito.');
        }

        $carrito[0]->cantidad -=1;
        $carrito[0]->save();

        return redirect()->route('lineaCarritos.index')->with('success', 'Producto restado del carrito.');
    }
}
