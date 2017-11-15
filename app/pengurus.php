<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengurus extends Model
{
    public function orders(){
        return $this->hasMany(order::class);
    }
}
