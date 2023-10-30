<?php

namespace App\Http\Controllers;

use App\Models\Supel;
use Illuminate\Http\Request;

class DashboardSuperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.supers.index', [
            'supers' => Supel::where('user_id', 1)->get()
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Supel $supel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supel $supel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supel $supel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supel $supel)
    {
        //
    }
}
