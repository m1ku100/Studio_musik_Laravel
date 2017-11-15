<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class new_ins extends Model
{
    public function jen_alats(){
        return $this->belongsTo(jen_alat::class);
    }

    public function studios(){
        return $this->belongsTo(studio::class);
    }
}
