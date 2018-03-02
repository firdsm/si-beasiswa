<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'nama_user', 'email', 'password', 'level_id'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public $timestamps = false;
}
