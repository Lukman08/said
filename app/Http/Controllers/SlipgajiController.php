<?php

namespace App\Http\Controllers;

use App\Models\slipgaji;
use Illuminate\Http\Request;

class SlipgajiController extends Controller
{
    public function pengajuanslipgaji(){
        $data = slipgaji::all();
        return view('User/pengajuanslipgaji', compact('data'));
    }

    public function slipgaji(){
        return view('User/pengajuanslipgaji');
    }

    public function tambahslipgaji()
    {
        return view('User/tambahslipgaji');
    }

    public function insertslipgaji(Request $request)
    {
        slipgaji::create([
        'name'=>$request->name,
        'tempatlahir'=>$request->tempatlahir,
        'tanggallahir'=>$request->tanggallahir,
        'jeniskelamin'=>$request->jeniskelamin,
        'status'=>$request->status,
        'pekerjaan'=>$request->pekerjaan,
        'alamat'=>$request->alamat,
        'keterangan'=> 0,
    ]);
        return redirect()->route('pengajuanslipgaji')->with('success', 'Pengajuan Slip Gaji berhasil dikirim.');
    }

    public function detailslipgaji($id){
        $data = slipgaji::find($id);
        return view('Dashboard/detailslipgaji', compact('data'));
    }

    public function uploadslipgaji(Request $request, $id){
        $request->validate([
            'fileslipgaji' => 'mimes:pdf'
        ]);
        $file = $request->file('fileslipgaji');
        $namafile = $file->getClientOriginalName();
        $path = 'fileslipgaji';
        $file->move($path, $namafile);
        $data = slipgaji::find($id)->update([
            'fileslipgaji' => $namafile
        ]);
        
        return redirect()->route('slipgaji')->with('upload', 'File Slip Gaji berhasil diupload.');
    }

    public function accslipgaji($id){
        $data = slipgaji::find($id)->update([
            'keterangan' => 1
        ]);
        return redirect()->route('slipgaji')->with('acc', 'Pengajuan Slip Gaji berhasil diacc.');
    }

    public function downloadslipgaji($id){

        $data = slipgaji::find($id);
        $files = $data->fileslipgaji;
        return response()->download(public_path('fileslipgaji/'.$files));

    }
}
