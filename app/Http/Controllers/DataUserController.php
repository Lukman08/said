<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataUserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function datauser()
    {
        $data = User::all();
        return view('Dashboard/datauser', compact('data'));
    }

    public function tambahuser()
    {
        return view('Dashboard/tambahuser');
    }

    public function insertuser(Request $request)
    {
        User::create(['name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password
    ]);
        return redirect()->route('datauser');
    }

    public function deleteuser($id) {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('datauser')->with('success', 'berhasil dihapus');
    }
}
