<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studio extends Model
{

    protected $fillable = [
        'nama_studio', 'harga_studio', 'gambar_studio',
    ];

    public function instruments()
    {
        return $this->hasMany(instrument::class);
    }

    public function order_studios()
    {
        return $this->hasMany(order_studio::class);
    }
}
