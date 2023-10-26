<?php

namespace App\Http\Controllers;

use App\Models\Lembur;
use Illuminate\Http\Request;
use App\Models\Supel;
use Carbon\Carbon;
use Illuminate\Support\Str;

class DashboardLemburController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('listlem', [
            'lembur' => Lembur::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tamblem', [
            'supels' => Supel::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validateData = $request->validate([
        //     'supel_id' => 'required',
        //     'lem_maksud' => 'required',
        //     'lem_tujuan' => 'required',
        //     'lem_tanggal' => 'required',
        //     'lem_dari' => 'required',
        //     'lem_sampai' => 'required',
        //     'lem_hasil' => 'required',
        // ]);
        Lembur::create([
            'supel_id' => $request->supel_id,
            'lem_dari' => Str::substr(Carbon::create(Str::substr($request->lem_tanggal, 6, 4), $bulan = Str::substr($request->lem_tanggal, 3, 2), Str::substr($request->lem_tanggal, 0, 2)), 0, 10) . " " . Carbon::parse($request->lem_dari)->format('H:i:s'),
            'lem_sampai' => Str::substr(Carbon::create(Str::substr($request->lem_tanggal, 6, 4), $bulan = Str::substr($request->lem_tanggal, 3, 2), Str::substr($request->lem_tanggal, 0, 2)), 0, 10) . " " . Carbon::parse($request->lem_sampai)->format('H:i:s'),
            'lem_maksud' => $request->lem_maksud,
            'lem_tujuan' => $request->lem_tujuan,
            'lem_tempat' => 'Kantor Stasiun KIPM Merak',
            'lem_hasil' => $request->lem_hasil
        ]);

        return redirect('lembur');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $temp = Lembur::find($id);
        // $tgl_surat = date("d", strtotime($temp->sup_tanggal)) . ' ' . $bulan[intval(date("m", strtotime($temp->sup_tanggal)))] . ' ' . date("Y", strtotime($temp->sup_tanggal));

        return view('detilslembur', [
            'lembur' => $temp
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lembur $lembur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lembur $lembur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lembur $lembur)
    {
        //
    }
}
