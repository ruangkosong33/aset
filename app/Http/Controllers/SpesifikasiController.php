<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\KodeController;
use App\Http\Controllers\RuangController;
use App\Models\Spesifikasi;
use App\Models\Kode;
use App\Models\Ruang;
use PDF;

class SpesifikasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $spec=Spesifikasi::latest()->paginate(5);
        //$spec=DB::table('spesifikasi')->paginate(7);
        return view('admin.pages.spesifikasi.index_spesifikasi', ['spec'=>$spec]);
    }

    public function create()
    {
        $kode=Kode::all();
        $ruang=Ruang::all();
        return view('admin.pages.spesifikasi.create_spesifikasi', ['kode' =>$kode, 'ruang'=>$ruang]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_barang'=>'required',
            'kode_id'=>'required',
            'merk'=>'required',
            'nomor_sertifikat'=>'required',
            'bahan'=>'required',
            'asal'=>'required',
            'tahun_beli'=>'required',
            'ukuran'=>'required',
            'harga_satuan'=>'required',
            'keadaan_barang'=>'required',
            'jumlah_barang'=>'required',
            'harga'=>'required',
            'ruang_id'=>'required'
        ]);

        DB::table('spesifikasi')->insert([
            'nama_barang'=>$request->nama_barang,
            'kode_id'=>$request->kode_id,
            'merk'=>$request->merk,
            'nomor_sertifikat'=>$request->nomor_sertifikat,
            'bahan'=>$request->bahan,
            'asal'=>$request->asal,
            'tahun_beli'=>$request->tahun_beli,
            'ukuran'=>$request->ukuran,
            'harga_satuan'=>$request->harga_satuan,
            'keadaan_barang'=>$request->keadaan_barang,
            'jumlah_barang'=>$request->jumlah_barang,
            'harga'=>$request->harga,
            'ruang_id'=>$request->ruang_id
        ]);

        Alert::success('Berhasil', 'Data Telah Tersimpan');
        
        return redirect()->route('spec.index');
    }

    public function show($id)
    {
        //$spec=Spesifikasi::find($id);
        $spec=DB::table('spesifikasi')
                        ->join('kode', 'spesifikasi.kode_id','kode.id')
                        ->join('ruang', 'spesifikasi.ruang_id', 'ruang.id')
                        ->select('spesifikasi.*', 'kode.kode_barang', 'ruang.nama_ruang')
                        ->where('spesifikasi.id', $id)
                        ->get();
        //$kode=Kode::all();
        
        return view('admin.pages.spesifikasi.show_spesifikasi',['spec'=>$spec]);
    }


    public function edit($id)
    {
        $spec=DB::table('spesifikasi')->where('id', $id)->first();
        $kode=Kode::all();
        $ruang=Ruang::all();
        
        return view('admin.pages.spesifikasi.edit_spesifikasi',['spec'=>$spec, 'kode'=>$kode, 'ruang'=>$ruang]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_barang'=>'required',
            'kode_id'=>'required',
            'merk'=>'required',
            'nomor_sertifikat'=>'required',
            'bahan'=>'required',
            'asal'=>'required',
            'tahun_beli'=>'required',
            'ukuran'=>'required',
            'harga_satuan'=>'required',
            'keadaan_barang'=>'required',
            'jumlah_barang'=>'required',
            'harga'=>'required',
            'ruang_id'=>'required'
        ]);

        DB::table('spesifikasi')->where('id', $request->id)->update([
            'nama_barang'=>$request->nama_barang,
            'kode_id'=>$request->kode_id,
            'merk'=>$request->merk,
            'nomor_sertifikat'=>$request->nomor_sertifikat,
            'bahan'=>$request->bahan,
            'asal'=>$request->asal,
            'tahun_beli'=>$request->tahun_beli,
            'ukuran'=>$request->ukuran,
            'harga_satuan'=>$request->harga_satuan,
            'keadaan_barang'=>$request->keadaan_barang,
            'jumlah_barang'=>$request->jumlah_barang,
            'harga'=>$request->harga,
            'ruang_id'=>$request->ruang_id
        ]);

        Alert::success('Berhasil', 'Data Telah Terupdate');

        return redirect()->route('spec.index');
    }

    public function destroy($id)
    {
        $spec=DB::table('spesifikasi')->where('id', $id)->delete();

        Alert::success('Berhasil', 'Data Telah Terhapus');

        return redirect()->route('spec.index');
    }
    
    public function exportPDF()
    {
        $spec=Spesifikasi::all();

        view()->share('spec', $spec);
        $pdf= PDF::loadview('admin.pages.spesifikasi.print_spesifikasi')->setPaper('f4', 'landscape');
        return $pdf->download('data.pdf');
    }

    public function search(Request $request)
    {
        if($request->has('search')){

            $spec=Spesifikasi::select('spesifikasi.*')
                            ->join('kode', 'spesifikasi.kode_id','kode.id')
                            ->join('ruang', 'spesifikasi.ruang_id', 'ruang.id')
                            ->Where('nama_barang', 'LIKE', '%'.$request->search.'%')
                            ->orWhere('harga', 'LIKE', '%'.$request->search.'%')
                            ->orWhere('kode_barang', 'LIKE', '%'.$request->search.'%') 
                            ->orWhere('nama_ruang', 'LIKE', '%'.$request->search.'%')                                               
                            ->paginate(5);

        }else{
            $spec=Spesifikasi::all();
        }

        return view('admin.pages.spesifikasi.index_spesifikasi', ['spec'=>$spec]);
    }

    
}
