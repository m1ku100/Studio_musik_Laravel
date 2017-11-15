<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function order_studios(){
        return $this->hasMany(order_studio::class);
    }
    public function kerusakan_studio(){
        return $this->hasMany(kerusakan_studio::class);
    }
    public function konfirmasi_pembayaran(){
        return $this->hasMany(konfirmasi_pembayaran::class);
    }
    public function pengurus(){
        return $this->belongsTo(pengurus::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }

}
