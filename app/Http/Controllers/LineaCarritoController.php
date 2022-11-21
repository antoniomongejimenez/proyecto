<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLineaCarritoRequest;
use App\Http\Requests\UpdateLineaCarritoRequest;
use App\Models\LineaCarrito;

class LineaCarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
}
