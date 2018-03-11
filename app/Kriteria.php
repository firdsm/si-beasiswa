<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = 'kriteria';
    public $timestamps = false;
    protected $fillable = ['beasiswa_id', 'kriteria_umum', 'ipk_min', 'semester_maks'];

    public function beasiswa()
    {
        return $this->belongsTo(Beasiswa::class, 'beasiswa_id');
    }
}
