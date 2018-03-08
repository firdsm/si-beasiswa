<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    protected $table = 'informasi_organisasi';
    protected $fillable = ['pendaftar_id', 'nama_organisasi', 'jabatan', 'tingkat_organisasi', 'awal_jabatan', 'akhir_jabatan', 'no_sertifikat'];
    public $timestamps = false;

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class);
    }
}
