<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTallaRequest;
use App\Http\Requests\UpdateTallaRequest;
use App\Models\Talla;

class TallaController extends Controller
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
     * @param  \App\Http\Requests\StoreTallaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTallaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Talla  $talla
     * @return \Illuminate\Http\Response
     */
    public function show(Talla $talla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Talla  $talla
     * @return \Illuminate\Http\Response
     */
    public function edit(Talla $talla)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTallaRequest  $request
     * @param  \App\Models\Talla  $talla
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTallaRequest $request, Talla $talla)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Talla  $talla
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talla $talla)
    {
        //
    }
}
