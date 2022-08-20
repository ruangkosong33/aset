<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\KodeController;
use App\Http\Controllers\SpesifikasiController;
use App\Models\Kode;
use App\Models\Spesifikasi;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Ruang;

class RuangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $ruang=DB::table('ruang')->paginate(5);

        return view('admin.pages.ruang.index_ruang', ['ruang'=>$ruang]);
    }

    public function create()
    {
        return view('admin.pages.ruang.create_ruang');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_ruang'=>'required',
        ]);

        DB::table('ruang')->insert([
            'nama_ruang'=>$request->nama_ruang,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('ruang.index');
    }

    public function show($id)
    {
        $ruang=DB::table('ruang')->where('id', $id)->get();

        return view('admin.pages.ruang.show_ruang', ['ruang'=>$ruang]);
    }

    public function edit($id)
    {
        $ruang=DB::table('ruang')->where('id', $id)->first();

        return view('admin.pages.ruang.edit_ruang', ['ruang'=>$ruang]);
    }
   

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_ruang'=>'required',
        ]);

        DB::table('ruang')->where('id', $request->id)->update([
            'nama_ruang'=>$request->nama_ruang,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('ruang.index');
    }

    public function destroy($id)
    {
        $ruang=DB::table('ruang')->where('id', $id)->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('ruang.index');
    }

    public function search(Request $request)
    {
        if($request->has('search')){

            $ruang=DB::table('ruang')->where('nama_ruang', 'LIKE', '%'.$request->search.'%')->paginate(7);

        }else {
            $ruang=Ruang::all();
        }

        return view('admin.pages.ruang.index_ruang', ['ruang'=>$ruang]);
    }
}
