<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function informasi(){
        $data = Informasi::orderBy('id', 'DESC')->simplePaginate(5);
        // $data = Informasi::all();
        return view('Dashboard/informasi', compact('data'));
    }

    public function tambahinformasi()
    {
        return view('Dashboard/tambahinformasi');
    }

    public function insertinformasi(Request $request)
    {
    $data = Informasi::create($request->all());
    if($request->hasFile('gambar')){
        $request->file('gambar')->move('gambarinformasi/', $request->file('gambar')->getClientOriginalName());
        $data->gambar = $request->file('gambar')->getClientOriginalName();
        $data->save();
    }
        return redirect()->route('informasi')->with('success', 'Informasi berhasil ditambahkan.');
    }

    public function detailinformasi($id){
        $data = Informasi::find($id);
        return view('User/detailinformasi', compact('data'));
    }

    public function editinformasi($id){
        $data = Informasi::find($id);
        return view('Dashboard/editinformasi', compact('data'));
    }

    public function updateinformasi(Request $request, $id){
        $data = Informasi::find($id);
        $data->update($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('gambarinformasi/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('informasi')->with('update', 'Informasi berhasil diupdate.');
    }

    public function deleteinformasi($id) {
        $data = Informasi::find($id)->delete();
        return redirect()->route('informasi')->with('delete', 'Informasi berhasil dihapus.');
    }

}
