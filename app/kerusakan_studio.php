<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kerusakan_studio extends Model
{
    protected $guarded=[

    ];
    public function orders(){
        return $this->belongsTo(order::class);
    }
}
