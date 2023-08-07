<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pengaduan;

class DashboardController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = Pengaduan::all()->count();

        $pending = Pengaduan::where('status', '0')->get()->count();

        $proses = Pengaduan::where('status', 'proses')->get()->count();

        $selesai = Pengaduan::where('status', 'selesai')->get()->count();
        
        return view('admin/dashboard',['pengaduan' => $pengaduan, 'pending' => $pending,'proses' => $proses, 'selesai' => $selesai]);
    }
}
