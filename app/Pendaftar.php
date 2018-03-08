<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $table = 'pendaftar';
    public $timestamps = false;
    protected $fillable = ['user_id', 'nama_pendaftar', 'gender', 'alamat_pendaftar', 'telp', 'ipk', 'semester', 'foto', 'nama_ayah', 'nama_ibu', 'pekerjaan_ayah', 'pekerjaan_ibu', 'gaji_ayah', 'gaji_ibu'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function prestasi()
    {
        return $this->hasMany(Prestasi::class);
    }
    public function organisasi()
    {
        return $this->hasMany(Organisasi::class);
    }
}
