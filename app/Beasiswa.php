<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    public $timestamps = false;
    protected $table = 'beasiswa';
    protected $fillable = ['lembaga_id', 'nama_beasiswa', 'detail_beasiswa', 'skala_tunjangan', 'jumlah_tunjangan', 'masa_kontrak', 'tanggal_oprec', 'status_oprec'];

    public function lembaga()
    {
        return $this->belongsTo(Lembaga::class, 'lembaga_id');
    }
    public function kriteria()
    {
        return $this->hasOne(Kriteria::class);
    }
}
