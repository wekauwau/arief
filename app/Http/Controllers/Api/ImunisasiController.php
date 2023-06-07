<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Imunisasi;
use Illuminate\Http\Request;

class ImunisasiController extends Controller
{
    public function index()
    {
        return Imunisasi::all();
    }

    public function store(Request $request)
    {
        $new = new Imunisasi([
            'tanggal' => $request->tanggal,
            'usia_saat_vaksin' => $request->usia_saat_vaksin,
            'tinggi' => $request->tinggi,
            'berat' => $request->berat,
            'periode' => $request->periode,
            'vaksins_id' => $request->vaksins_id,
            'data_anaks_id' => $request->data_anaks_id,
            'data_ibus_id' => $request->data_ibus_id,
        ]);
        $new->save();
    }
}
