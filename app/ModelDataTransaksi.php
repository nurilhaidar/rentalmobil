<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelDataTransaksi extends Model
{
    protected $table = 'data_transaksi';
    public $timestamps = false;

    protected $fillable = [
        'id_penyewa', 'id_mobil', 'id_petugas'
    ];
}
