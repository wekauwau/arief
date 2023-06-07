<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DataIbu;
use Illuminate\Http\Request;

class DataIbuController extends Controller
{
    public function login(Request $request)
    {
        $result = DataIbu::where('nomor', $request->nomor)
            ->where('password', $request->password)
            ->get();

        return sizeof($result);
    }

    public function register(Request $request)
    {
        $new = new DataIbu([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'nomor' => $request->nomor,
            'password' => $request->password,
        ]);
        $new->save();
    }
}
