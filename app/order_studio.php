<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_studio extends Model
{
    protected $fillable = [
        'order_id', 'studio_id', 'waktu_mulai', 'waktu_habis', 'total_waktu' ,'deskripsi','harga',
    ];

    public function studio()
    {
        return $this->belongsTo(studio::class);
    }

    public function order()
    {
        return $this->belongsTo(order::class);
    }
}
