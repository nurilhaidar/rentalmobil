<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelJenisMobil extends Model
{
    protected $table = 'jenis_mobil';
    public $timestamps = false;

    protected $fillable = [
        'jenis'
    ];  
}
