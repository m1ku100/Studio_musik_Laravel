<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengurus extends Model
{
    protected $fillable = [
        'nama_pengurus', 'email', 'password','no_telp','gambar_pengurus','status_pengurus',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function orders(){
        return $this->hasMany(order::class);
    }
}
