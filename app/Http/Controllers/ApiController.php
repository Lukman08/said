<?php

namespace App\Http\Controllers;

use App\Models\sktm;
use App\Models\Aspirasi;
use App\Models\slipgaji;
use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function index()
    {
        $data = Informasi::orderBy('id', 'DESC')->get();
        return response()->json($data);
    }
    public function pengajuan_sktm(Request $request)
    {

        $validator = Validator::make($request->all(),[
        'name'=> 'required',
        'agama'=>'required',
        'tempatlahir'=>'required',
        'tanggallahir'=>'required',
        'jeniskelamin'=>'required',
        'pekerjaan'=>'required',
        'alamat'=>'required',
        'name_ortu'=>'required',
        'tempatlahir_ortu'=>'required',
        'tanggallahir_ortu'=>'required',
        'pekerjaan_ortu'=>'required',
        'alamat_ortu'=>'required',
        'keterangan'=> 'required',
        ],
            [
        'name'=> 'Harus Ada Nama',
        'agama'=> 'Harus Ada Agama',
        'tempatlahir'=> 'Harus Ada Telmpat Lahir',
        'tanggallahir'=>'Harus Ada Tanggal Lahir',
        'jeniskelamin'=>'Harus Ada Jenis Kelamin',
        'pekerjaan'=>'Harus Ada Pekerjaan',
        'alamat'=>'Harus Ada Alamat',
        'name_ortu'=>'Harus Ada Nama Orang Tua', 
        'tempatlahir_ortu'=>'Harus Ada Tempat Lahir Orang Tua',
        'tanggallahir_ortu'=>'Harus Ada Tanggal Lahir Orang Tua',
        'pekerjaan_ortu'=>'Harus Ada Pekerjaan Orang Tua',
        'alamat_ortu'=>'Harus Ada Alamat Orang Tua',
        'keterangan'=> 'Harus Ada',
            ]);
            if($validator->fails()){
                return response()->json([
                    'success' => false,
                    'message' => 'Silahkan Isi Bidang Yang Kosong',
                    'data'    => $validator->errors()
                ],401);
            }else{
                
                $data = sktm::create([
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

            if ($data) {
                return response()->json([
                    'success' => true,
                    'message' => 'Pengajuan SKTM berhasil dikirim!',
                    'data'    => $data,
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Pengajuan SKTM gagal dikirim!',
                ], 401);
            }
        }      
    }

    public function pengajuan_slip(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'tempatlahir'=>'required',
            'tanggallahir'=>'required',
            'jeniskelamin'=>'required',
            'status'=>'required',
            'pekerjaan'=>'required',
            'alamat'=>'required',
            'keterangan'=>'required',
                
            ],
                [
            'name'=>'Harus Ada Nama',
            'tempatlahir'=>'Harus Ada Tempat Lahir',
            'tanggallahir'=>'Harus Ada Tanggal Lahir',
            'jeniskelamin'=>'Harus Ada Jenis Kelamin',
            'status'=>'Harus Ada Status Perkawinan',
            'pekerjaan'=>'Harus Ada Pekerjaan',
            'alamat'=>'Harus Ada Alamat',
            'keterangan'=> 'Harus Ada',
                ]);
                if($validator->fails()){
                    return response()->json([
                        'success' => false,
                        'message' => 'Silahkan Isi Bidang Yang Kosong',
                        'data'    => $validator->errors()
                    ],401);
                }else{
                    
                    $data = slipgaji::create([
                        'name'=>$request->name,
                        'tempatlahir'=>$request->tempatlahir,
                        'tanggallahir'=>$request->tanggallahir,
                        'jeniskelamin'=>$request->jeniskelamin,
                        'status'=>$request->status,
                        'pekerjaan'=>$request->pekerjaan,
                        'alamat'=>$request->alamat,
                        'keterangan'=> 0,
                        ]);
    
                if ($data) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Pengajuan slip gaji berhasil dikirim!',
                        'data'    => $data,
                    ], 200);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Pengajuan slip gaji gagal dikirim!',
                    ], 401);
                }
            }    
    }

    public function aspirasi(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'aspirasi'=>'required',
                
            ],
                [
            'name'=>'Harus Ada Nama',
            'aspirasi'=>'Harus Ada Aspirasi',
                ]);
                if($validator->fails()){
                    return response()->json([
                        'success' => false,
                        'message' => 'Silahkan Isi Bidang Yang Kosong',
                        'data'    => $validator->errors()
                    ],401);
                }else{
                    
                    $data = Aspirasi::create([
                        'name'=>$request->name,
                        'aspirasi'=>$request->aspirasi
                        ]);
    
                if ($data) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Aspirasi berhasil dikirim!',
                        'data'    => $data,
                    ], 200);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Aspirasi gagal dikirim!',
                    ], 401);
                }
            } 
    }
}
