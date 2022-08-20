<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spesifikasi extends Model
{
    use HasFactory;

    protected $table ='spesifikasi';

    protected $fillable = 
    ['nama_barang', 'kode_id', 'merk', 'nomor_sertifikat', 'bahan', 'asal', 'tahun_beli', 'ukuran', 'harga_satuan', 'keadaan_barang',
    'jumlah_barang', 'harga', 'ruang_id'];


    public function kode()
    {
        return $this->belongsTo(Kode::class, 'kode_id', 'id');
    }

    public function ruang()
    {
        return $this->belongsTo(Ruang::class, 'ruang_id', 'id');
    }

}
