<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lembaga extends Model
{
    protected $table = 'lembaga';
    protected $fillable = ['user_id', 'nama_lembaga', 'alamat_lembaga', 'logo_lembaga'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function beasiswa()
    {
        return $this->hasMany(Beasiswa::class);
    }
}
