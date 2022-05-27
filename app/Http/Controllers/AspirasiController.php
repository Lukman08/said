<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function aspirasi() {
        $data = Aspirasi::all();
        return view('Dashboard/aspirasi', compact('data'));
    }

    public function insertaspirasi(Request $request)
    {
        Aspirasi::create(['name'=>$request->name,
        'aspirasi'=>$request->aspirasi
    ]);
        return redirect()->route('insertaspirasi');
    }
}
