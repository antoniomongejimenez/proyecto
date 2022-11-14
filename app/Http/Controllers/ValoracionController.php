<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreValoracionRequest;
use App\Http\Requests\UpdateValoracionRequest;
use App\Models\Valoracion;

class ValoracionController extends Controller
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
     * @param  \App\Http\Requests\StoreValoracionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreValoracionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Valoracion  $valoracion
     * @return \Illuminate\Http\Response
     */
    public function show(Valoracion $valoracion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Valoracion  $valoracion
     * @return \Illuminate\Http\Response
     */
    public function edit(Valoracion $valoracion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateValoracionRequest  $request
     * @param  \App\Models\Valoracion  $valoracion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateValoracionRequest $request, Valoracion $valoracion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Valoracion  $valoracion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Valoracion $valoracion)
    {
        //
    }
}
