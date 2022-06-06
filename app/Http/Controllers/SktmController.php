<?php

namespace App\Http\Controllers;

use App\Models\sktm;
use Illuminate\Http\Request;
use App\Http\Controllers\SktmController;
use Illuminate\Http\Response;

class SktmController extends Controller
{
    public function pengajuansktm(){
        $data = sktm::all();
        return view('User/pengajuansktm', compact('data'));
    }

    public function sktm(){
        return view('User/pengajuansktm');
    }

    public function tambahsktm()
    {
        return view('User/tambahsktm');
    }

    public function insertsktm(Request $request)
    {
        sktm::create([
            
        'name'=>$request->name,
        'agama'=>$request->agama,
        'tempatlahir'=>$request->tempatlahir,
        'tanggallahir'=>$request->tanggallahir,
        'jeniskelamin'=>$request->jeniskelamin,
        'pekerjaan'=>$request->pekerjaan,
        'alamat'=>$request->alamat,
        'name_ortu'=>$request->name_ortu,
        'tempatlahir_ortu'=>$request->tempatlahir_ortu,
        'tanggallahir_ortu'=>$request->tanggallahir_ortu,
        'pekerjaan_ortu'=>$request->pekerjaan_ortu,
        'alamat_ortu'=>$request->alamat_ortu,
        'keterangan'=> 0,
    ]);
        return redirect()->route('pengajuansktm')->with('success', 'Pengajuan SKTM berhasil dikirim.');
    }

    public function detailsktm($id){
        $data = sktm::find($id);
        return view('Dashboard/detailsktm', compact('data'));
    }

    public function uploadsktm(Request $request, $id){
        $request->validate([
            'filesktm' => 'mimes:pdf'
        ]);
        $file = $request->file('filesktm');
        $namafile = $file->getClientOriginalName();
        $path = 'filesktm';
        $file->move($path, $namafile);
        $data = sktm::find($id)->update([
            'filesktm' => $namafile
        ]);
        
        return redirect()->route('sktm')->with('upload', 'File SKTM berhasil diupload.');
    }

    public function accsktm($id){
        $data = sktm::find($id)->update([
            'keterangan' => 1
        ]);
        return redirect()->route('sktm')->with('acc', 'Pengajuan SKTM berhasil diacc.');
    }

    public function downloadsktm($id){

        $data = sktm::find($id);
        $files = $data->filesktm;
        return response()->download(public_path('filesktm/'.$files));

    }
}
