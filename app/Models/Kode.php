<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kode extends Model
{
    use HasFactory;

    protected $table ='kode';

    protected $fillable = ['kode_barang', 'register'];


    public function spesifikasi()
    {
        return $this->hasOne(Spesifikasi::class, 'spesifikasi_id', 'id');
    }

    public function ruang()
    {
        return $this->hasOne(ruang::class, 'ruang_id', 'id');
    }
}


