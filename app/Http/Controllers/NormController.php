<?php

namespace App\Http\Controllers;

use App\Models\Norm;
use App\Http\Requests\StoreNormRequest;
use App\Http\Requests\UpdateNormRequest;

class NormController extends Controller
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
     * @param  \App\Http\Requests\StoreNormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNormRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Norm  $norm
     * @return \Illuminate\Http\Response
     */
    public function show(Norm $norm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Norm  $norm
     * @return \Illuminate\Http\Response
     */
    public function edit(Norm $norm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNormRequest  $request
     * @param  \App\Models\Norm  $norm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNormRequest $request, Norm $norm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Norm  $norm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Norm $norm)
    {
        //
    }
}
