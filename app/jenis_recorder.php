<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_recorder extends Model
{
    public function orders(){
        return $this->hasMany(jenis_recorder::class);
    }
}
