<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTiposPersonaRequest;
use App\Http\Requests\UpdateTiposPersonaRequest;
use App\Models\TiposPersona;

class TiposPersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipospersonas = TiposPersona::all();

        return view('tipospersonas.index', [
            'tipospersonas' => $tipospersonas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoPersona = new TiposPersona();

        return view('tipospersonas.create', [
            'tipoPersona' => $tipoPersona,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTiposPersonaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTiposPersonaRequest $request)
    {
        $validados = $request->validated();
        $tipoPersona = new TiposPersona($validados);
        $tipoPersona->save();
        return redirect()->route('tipospersonas.index')->with('success', "Tipo de persona creado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TiposPersona  $tiposPersona
     * @return \Illuminate\Http\Response
     */
    public function show(TiposPersona $tipospersona)
    {

        return view('tipospersonas.show', [
            'tipospersona' => $tipospersona,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TiposPersona  $tiposPersona
     * @return \Illuminate\Http\Response
     */
    public function edit(TiposPersona $tipospersona)
    {
        return view('tipospersonas.edit', [
            'tipospersona' => $tipospersona,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTiposPersonaRequest  $request
     * @param  \App\Models\TiposPersona  $tiposPersona
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTiposPersonaRequest $request, TiposPersona $tipospersona)
    {
        $tipospersona->fill($request->validated());
        $tipospersona->save();

        return redirect()->route('tipospersonas.index')->with('success', "Tipo de persona editado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TiposPersona  $tiposPersona
     * @return \Illuminate\Http\Response
     */
    public function destroy(TiposPersona $tipospersona)
    {
        $tipospersona->delete();

        return redirect()->route('tipospersonas.index')->with('success', "Tipo de persona borrado correctamente");
    }
}
