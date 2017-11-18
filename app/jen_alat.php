<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jen_alat extends Model
{
    protected $fillable = [
        'Status',
    ];

    public function instrument(){
        return $this->hasMany(new_ins::class);
    }
}
