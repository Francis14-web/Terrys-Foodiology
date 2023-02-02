<?php

namespace App\Http\Controllers;

use App\Models\Canteen;
use App\Http\Requests\StoreCanteenRequest;
use App\Http\Requests\UpdateCanteenRequest;

class CanteenController extends Controller
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
     * @param  \App\Http\Requests\StoreCanteenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCanteenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Canteen  $canteen
     * @return \Illuminate\Http\Response
     */
    public function show(Canteen $canteen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Canteen  $canteen
     * @return \Illuminate\Http\Response
     */
    public function edit(Canteen $canteen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCanteenRequest  $request
     * @param  \App\Models\Canteen  $canteen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCanteenRequest $request, Canteen $canteen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Canteen  $canteen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Canteen $canteen)
    {
        //
    }
}
