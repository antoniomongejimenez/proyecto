<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMeGustaRequest;
use App\Http\Requests\UpdateMeGustaRequest;
use App\Models\MeGusta;

class MeGustaController extends Controller
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
     * @param  \App\Http\Requests\StoreMeGustaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMeGustaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MeGusta  $meGusta
     * @return \Illuminate\Http\Response
     */
    public function show(MeGusta $meGusta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MeGusta  $meGusta
     * @return \Illuminate\Http\Response
     */
    public function edit(MeGusta $meGusta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMeGustaRequest  $request
     * @param  \App\Models\MeGusta  $meGusta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMeGustaRequest $request, MeGusta $meGusta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MeGusta  $meGusta
     * @return \Illuminate\Http\Response
     */
    public function destroy(MeGusta $meGusta)
    {
        //
    }
}
