<?php

namespace App\Http\Controllers;

use App\Models\Lembur;
use Illuminate\Http\Request;
use App\Models\Supel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DashboardLemburController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.lemburs.index', [
            'lembur' => Lembur::orderBy('lem_dari')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.lemburs.tamblem', [
            'supels' => Supel::where('user_id', 1)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->file('lem_gambar')->store('lem-gambars');
        
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
            'lem_tempat' => $request->lem_tempat,
            'lem_hasil' => $request->lem_hasil
        ]);

        return redirect('/dashboard/lembur');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $temp = Lembur::find($id);
        $tanggal = '2015-06-03';
        $day = date('D', strtotime($temp->lem_dari));
        $dayList = array(
            'Sun' => 'Minggu',
            'Mon' => 'Senin',
            'Tue' => 'Selasa',
            'Wed' => 'Rabu',
            'Thu' => 'Kamis',
            'Fri' => 'Jumat',
            'Sat' => 'Sabtu'
        );
        $bulan = date('m', strtotime($temp->lem_dari));
        $bulanList = array(
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
        );

        return view('/dashboard/lemburs/showlem', [
            'lembur' => $temp,
            'hari' => $dayList[$day] . ', ' . date('d', strtotime($temp->lem_dari)) . ' ' .  $bulanList[$bulan] . ' ' .  date('Y', strtotime($temp->lem_dari)) . ' Pukul ' . date('H:i', strtotime($temp->lem_dari)) . ' s/d ' . date('H:i', strtotime($temp->lem_sampai)),
            'tglttd' => date('d', strtotime($temp->lem_dari)) . ' ' .  $bulanList[$bulan] . ' ' .  date('Y', strtotime($temp->lem_dari)),
            'tglspl' => date('d', strtotime($temp->Supel->sup_tanggal)) . ' ' .  $bulanList[date('m', strtotime($temp->Supel->sup_tanggal))] . ' ' .  date('Y', strtotime($temp->Supel->sup_tanggal))
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lembur $lembur)
    {
        return view('/dashboard/lemburs/editlem', [
            'lembur' => $lembur,
            'supels' => Supel::where('user_id', 1)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lembur $lembur)
    {
        Lembur::where('id', $lembur->id)
            ->update([
                'supel_id' => $request->supel_id,
                'lem_dari' => Str::substr(Carbon::create(Str::substr($request->lem_tanggal, 6, 4), $bulan = Str::substr($request->lem_tanggal, 3, 2), Str::substr($request->lem_tanggal, 0, 2)), 0, 10) . " " . Carbon::parse($request->lem_dari)->format('H:i:s'),
                'lem_sampai' => Str::substr(Carbon::create(Str::substr($request->lem_tanggal, 6, 4), $bulan = Str::substr($request->lem_tanggal, 3, 2), Str::substr($request->lem_tanggal, 0, 2)), 0, 10) . " " . Carbon::parse($request->lem_sampai)->format('H:i:s'),
                'lem_maksud' => $request->lem_maksud,
                'lem_tujuan' => $request->lem_tujuan,
                'lem_tempat' => $request->lem_tempat,
                'lem_hasil' => $request->lem_hasil
            ]);

        return redirect('dashboard/lembur')->with('success', 'Butir telah di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $lembur = Lembur::find($id);
        $lembur->delete();
        return redirect("dashboard/lembur");
    }
}
