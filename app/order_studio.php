<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_studio extends Model
{
    protected $fillable = [
        'order_id', 'studio_id', 'jam_order','deskripsi','harga',
    ];

    public function studios(){
        return $this->belongsTo(instrument::class);
    }
    public function orders(){
        return $this->belongsTo(order::class);
    }
}
