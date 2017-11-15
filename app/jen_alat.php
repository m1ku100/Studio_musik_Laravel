<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jen_alat extends Model
{
    public function instrument(){
        return $this->hasMany(new_ins::class);
    }
}
