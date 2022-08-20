<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $jumlah_kode=DB::Table('kode')->count();
        $jumlah_barang=DB::Table('spesifikasi')->count();
        $jumlah_ruang=DB::table('ruang')->count();

        return view('admin.pages.dashboard.index_dashboard',
        ['jumlah_kode'=>$jumlah_kode, 'jumlah_barang'=>$jumlah_barang, 'jumlah_ruang'=>$jumlah_ruang]);
    }
}
