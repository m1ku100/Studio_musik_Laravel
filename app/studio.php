<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studio extends Model
{
    public function instruments(){
        return $this->hasMany(instrument::class);
    }
    public function order_studios(){
        return $this->hasMany(order_studio::class);
    }
}
