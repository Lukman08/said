<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function aspirasi() {
        $data = Aspirasi::orderBy('id', 'DESC')->simplePaginate(5);
        return view('Dashboard/aspirasi', compact('data'));
    }

    public function kirimaspirasi() {
        return view('User/tambahaspirasi');
    }

    public function insertaspirasi(Request $request)
    {
        Aspirasi::create([
        'name'=>$request->name,
        'aspirasi'=>$request->aspirasi
    ]);
        return redirect()->back()->with('success', 'Anda berhasil mengirim aspirasi.');
    }
}
