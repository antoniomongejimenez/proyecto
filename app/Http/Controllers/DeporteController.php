<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeporteRequest;
use App\Http\Requests\UpdateDeporteRequest;
use App\Models\Deporte;

class DeporteController extends Controller
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
     * @param  \App\Http\Requests\StoreDeporteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeporteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deporte  $deporte
     * @return \Illuminate\Http\Response
     */
    public function show(Deporte $deporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deporte  $deporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Deporte $deporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeporteRequest  $request
     * @param  \App\Models\Deporte  $deporte
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeporteRequest $request, Deporte $deporte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deporte  $deporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deporte $deporte)
    {
        //
    }
}
