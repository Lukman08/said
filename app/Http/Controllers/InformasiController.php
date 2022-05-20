<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function informasi(){
        $data = Informasi::all();
        return view('Dashboard/informasi', compact('data'));
    }

    public function tambahinformasi()
    {
        return view('Dashboard/tambahinformasi');
    }

    public function insertinformasi(Request $request)
    {
    //     return $request->file('image')->informasi('informasi');
    //     Informasi::create(['judul'=>$request->judul,
    //     'gambar'=>$request->gambar,
    //     'isi'=>$request->isi
    // ]);
    $data = Informasi::create($request->all());
    if($request->hasFile('gambar')){
        $request->file('gambar')->move('gambarinformasi/', $request->file('gambar')->getClientOriginalName());
        $data->gambar = $request->file('gambar')->getClientOriginalName();
        $data->save();
    }
        return redirect()->route('informasi');
    }

    public function tampilinformasi($id){
    }

    public function deleteinformasi($id) {
        $data = Informasi::find($id);
        $data->delete();
        return redirect()->route('informasi')->with('success', 'berhasil dihapus');
    }
}
