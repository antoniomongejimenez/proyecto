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
        $deportes = Deporte::all();

        return view('deportes.index', [
            'deportes' => $deportes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deporte = new Deporte();

        return view('deportes.create', [
            'deporte' => $deporte,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDeporteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeporteRequest $request)
    {
        $validados = $request->validated();
        $deporte = new Deporte($validados);
        $deporte->save();
        return redirect()->route('deportes.index')->with('success', "Deporte creado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deporte  $deporte
     * @return \Illuminate\Http\Response
     */
    public function show(Deporte $deporte)
    {
        return view('deportes.show', [
            'deporte' => $deporte,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deporte  $deporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Deporte $deporte)
    {
        return view('deportes.edit', [
            'deporte' => $deporte,
        ]);
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
        $deporte->fill($request->validated());
        $deporte->save();

        return redirect()->route('deportes.index')->with('success', "Deporte editado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deporte  $deporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deporte $deporte)
    {
        $deporte->delete();

        return redirect()->route('deportes.index')->with('success', "Deporte borrado correctamente");
    }
}
