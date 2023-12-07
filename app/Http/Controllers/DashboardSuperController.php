<?php

namespace App\Http\Controllers;

use App\Models\Supel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DashboardSuperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.supers.index', [
            'supers' => Supel::where('user_id', auth()->user()->id)->orderBy('sup_tanggal')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.supers.tambsup', [
            'bulan' => ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Supel::create([
            'user_id' => auth()->user()->id,
            'sup_nomor' => $request->sup_nomor,
                'sup_tanggal' => Str::substr(Carbon::create(Str::substr($request->sup_tanggal, 6, 4), $bulan = Str::substr($request->sup_tanggal, 3, 2), Str::substr($request->sup_tanggal, 0, 2)), 0, 10),
                'sup_bulan' => $request->sup_bulan,
                'sup_tahun' => $request->sup_tahun,
                'sup_keterangan' => $request->sup_keterangan
        ]);

        return redirect('/dashboard/super');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );

        $temp = Supel::find($id);
        $tgl_surat = date("d", strtotime($temp->sup_tanggal)) . ' ' . $bulan[intval(date("m", strtotime($temp->sup_tanggal)))] . ' ' . date("Y", strtotime($temp->sup_tanggal));

        return view('/dashboard/supers/showsup', [
            'supel' => $temp,
            'tg_surat' => $tgl_surat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {   
        return view('/dashboard/supers/editsup', [
            'supel' => Supel::find($id),
            'bulan' => ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Supel::where('id', $id)
            ->update([
                'sup_nomor' => $request->sup_nomor,
                'sup_tanggal' => Str::substr(Carbon::create(Str::substr($request->sup_tanggal, 6, 4), $bulan = Str::substr($request->sup_tanggal, 3, 2), Str::substr($request->sup_tanggal, 0, 2)), 0, 10),
                'sup_bulan' => $request->sup_bulan,
                'sup_tahun' => $request->sup_tahun,
                'sup_keterangan' => $request->sup_keterangan
            ]);

        return redirect('dashboard/super')->with('success', 'Surat Perintah Lembur telah di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supel $supel)
    {
        //
    }
}
