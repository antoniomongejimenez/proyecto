<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Models\Deporte;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\Tipo;
use App\Models\TiposPersona;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();

        return view('productos.index', [
            'productos' => $productos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto();

        $deportes = Deporte::all();
        $tipos = Tipo::all();
        $marcas = Marca::all();
        $tiposPersonas = TiposPersona::all();

        return view('productos.create', [
            'tiposPersonas' => $tiposPersonas,
            'marcas' => $marcas,
            'tipos' => $tipos,
            'deportes' => $deportes,
            'producto' => $producto,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoRequest $request)
    {
        $validados = $request->validated();
        $producto = new Producto($validados);
        $producto->save();
        return redirect()->route('productos.index')->with('success', "Producto creado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('productos.show', [
            'producto' => $producto,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $deportes = Deporte::all();
        $tipos = Tipo::all();
        $marcas = Marca::all();
        $tiposPersonas = TiposPersona::all();

        return view('productos.edit', [
            'tiposPersonas' => $tiposPersonas,
            'marcas' => $marcas,
            'tipos' => $tipos,
            'deportes' => $deportes,
            'producto' => $producto,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductoRequest  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductoRequest $request, Producto $producto)
    {
        $producto->fill($request->validated());
        $producto->save();

        return redirect()->route('productos.index')->with('success', "Producto editado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
