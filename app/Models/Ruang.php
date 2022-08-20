<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;

    protected $table ='ruang';

    protected $fillable = ['nama_ruang'];


    public function spesifikasi()
    {
        return $this->hasMany(Spesifikasi::class, 'spesifikasi_id', 'id');
    }

    public function kode()
    {
        return $this->hasOne(kode::class, 'kode_id', 'id');
    }
}
