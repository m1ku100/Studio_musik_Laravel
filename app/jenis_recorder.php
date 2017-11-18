<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_recorder extends Model
{
    protected $fillable = [
        'nama_recorder', 'deskripsi', 'harga_recorder', 'batas_hari',
    ];

    public function orders()
    {
        return $this->hasMany(jenis_recorder::class);
    }
}
