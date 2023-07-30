<?php

namespace App\Http\Controllers;

use App\Models\Maps;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function store(Request $request){
        Maps::create([
            'nama'=>$request->nama,
            'slug'=> Str::slug($request->nama),
            'latlong'=>$request->latlong,
            'kategori'=>$request->kategori_tempat,
            'keterangan'=>$request->keterangan,
        ]);

        return redirect()->back();
    }
}
