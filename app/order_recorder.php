<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_recorder extends Model
{
    public function orders(){
        return $this->belongsTo(order::class);
    }
    public function jenis_recorder(){
        return $this->belongsTo(jenis_recorder::class);
    }
}
