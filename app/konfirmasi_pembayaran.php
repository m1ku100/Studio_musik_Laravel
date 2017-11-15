<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class konfirmasi_pembayaran extends Model
{
    public function orders(){
        return $this->belongsTo(order::class);
    }
}
