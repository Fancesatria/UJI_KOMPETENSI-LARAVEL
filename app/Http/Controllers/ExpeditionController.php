<?php

namespace App\Http\Controllers;

use App\Models\Expedition;
use App\Http\Requests\StoreExpeditionRequest;
use App\Http\Requests\UpdateExpeditionRequest;

class ExpeditionController extends Controller
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
     * @param  \App\Http\Requests\StoreExpeditionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExpeditionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expedition  $expedition
     * @return \Illuminate\Http\Response
     */
    public function show(Expedition $expedition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expedition  $expedition
     * @return \Illuminate\Http\Response
     */
    public function edit(Expedition $expedition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExpeditionRequest  $request
     * @param  \App\Models\Expedition  $expedition
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExpeditionRequest $request, Expedition $expedition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expedition  $expedition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expedition $expedition)
    {
        //
    }
}
