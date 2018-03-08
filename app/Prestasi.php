<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $table = 'informasi_prestasi';
    public $timestamps = false;
    protected $fillable = ['pendaftar_id', 'prestasi', 'tanggal_kegiatan', 'jenis_kepesertaan', 'tingkat_kegiatan', 'predikat', 'no_sertifikat'];

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class);
    }
}
