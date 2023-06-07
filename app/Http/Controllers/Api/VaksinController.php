<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vaksin;
use Illuminate\Http\Request;

class VaksinController extends Controller
{
    public function index()
    {
        return Vaksin::all();
    }

    public function show($id)
    {
        return Vaksin::where('id', $id)->get();
    }

    public function store(Request $request)
    {
        $new = new Vaksin([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);
        $new->save();
    }
}
