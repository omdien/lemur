<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Http\Requests\StoreGambarRequest;
use App\Http\Requests\UpdateGambarRequest;

class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGambarRequest $request)
    {
        ddd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Gambar $gambar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gambar $gambar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGambarRequest $request, Gambar $gambar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gambar $gambar)
    {
        //
    }
}
