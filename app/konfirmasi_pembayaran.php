<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class konfirmasi_pembayaran extends Model
{
    protected $fillable = [
        'order_id', 'member_id', 'atas_nama', 'nama_bank', 'tanggal_pembayaran', 'deskripsi', 'jumlah',
    ];

    public function orders()
    {
        return $this->belongsTo(order::class);
    }
}
