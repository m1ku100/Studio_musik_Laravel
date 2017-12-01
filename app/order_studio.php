<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_studio extends Model
{
    protected $fillable = [
        'order_id', 'studio_id', 'waktu_mulai', 'waktu_habis', 'total_waktu' ,'deskripsi','harga',
    ];

    public function studios(){
        return $this->belongsTo(studio::class);
    }
    public function orders(){
        return $this->belongsTo(order::class);
    }
}
