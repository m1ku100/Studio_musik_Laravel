<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_studio extends Model
{
    public function studios(){
        return $this->belongsTo(instrument::class);
    }
    public function orders(){
        return $this->belongsTo(order::class);
    }
}
