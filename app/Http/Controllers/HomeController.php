<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Aspirasi;
use App\Models\Informasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
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
    public function index()
    {
        $datauser = User::count();
        $informasi = Informasi::count();
        $aspirasi = Aspirasi::count();
        return view('Dashboard/index', compact('datauser', 'informasi', 'aspirasi'));
    }
}
