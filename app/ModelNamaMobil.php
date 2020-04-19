<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelNamaMobil extends Model
{
    protected $table = 'nama_mobil';
    public $timestamps = false;

    protected $fillable = [
        'nama_mobil', 'id_jenismobil'
    ];
}
