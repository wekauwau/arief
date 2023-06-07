<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DataAnak;
use Illuminate\Http\Request;

class DataAnakController extends Controller
{
    public function show(Request $request)
    {
        return DataAnak::where('data_ibus_id', $request->data_ibus_id)
            ->get();
    }

    public function store(Request $request)
    {
        $new = new DataAnak([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'usia' => $request->usia,
            'jenis_kelamin' => $request->jenis_kelamin,
            'data_ibus_id' => $request->data_ibus_id,
        ]);
        $new->save();
    }
}
