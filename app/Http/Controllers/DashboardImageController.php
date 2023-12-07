<?php

namespace App\Http\Controllers;
use App\Models\Gambar;
use App\Models\Lembur;

use Illuminate\Http\Request;

class DashboardImageController extends Controller
{
    public function index($id) 
    {
        $gambars = Gambar::where('lembur_id', $id)->get();
        return view('dashboard.lemburs.imaglem', [
            'gambars' => $gambars,
            'lembur' => Lembur::find($id)
        ]);
    }

    public function store(Request $request, $id)
    {
        Gambar::create([
            'lembur_id' => $id,
            'lem_gambar' => $request->file('lem_gambar')->store('lembur-images')
        ]);

        return redirect('/dashboard/lembur/'.$id.'/image');
    }
}
