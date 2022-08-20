<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\SpesifikasiController;
use App\Models\Kode;
use App\Models\Spesifikasi;
use App\Http\Controllers\RuangController;


class KodeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $kode=DB::table('kode')->paginate(5);
        //$kode=DB::table('kode')->paginate(7);

        return view('admin.pages.kode.index_kode',compact('kode'));
    }

    public function create()
    {
        return view('admin.pages.kode.create_kode');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'kode_barang'=>'required',
            'register'=>'required',
        ]);

        DB::table('kode')->insert([
            'kode_barang'=>$request->kode_barang,
            'register'=>$request->register,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Tersimpan');

        return redirect()->route('kode.index');
    }

    public function edit($id)
    {
        $kode=DB::table('kode')->where('id', $id)->first();

        return view('admin.pages.kode.edit_kode',['kode'=>$kode]);
    }

    public function show($id)
    {
        $kode=DB::table('kode')->where('id', $id)->get();

        return view('admin.pages.kode.show_kode',['kode'=>$kode]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'kode_barang'=>'required',
            'register'=>'required',
        ]);

        DB::table('kode')->where('id',$request->id)->update([
            'kode_barang'=>$request->kode_barang,
            'register'=>$request->register,
        ]);

        Alert::info('Update', 'Data Berhasil Terupdate');

        return redirect()->route('kode.index');
    }

    public function destroy($id)
    {
        $kode=DB::table('kode')->where('id', $id)->delete();

        Alert::success('Hapus', 'Data Berhasil Di hapus');
    
        return redirect()->route('kode.index');
    }

    public function search(Request $request)
    {
        if($request->has('search')){

            $kode=DB::table('kode')->where('kode_barang', 'LIKE', '%'.$request->search.'%')
                                   ->orWhere('register', 'LIKE', '%'.$request->search.'%')
                                   ->paginate(5);
        }else {
            $kode=Kode::all();
        }

        return view('admin.pages.kode.index_kode', ['kode'=>$kode]);
    }
}
