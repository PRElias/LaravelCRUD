<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MUNICIPIOS extends Model
{
    protected $primaryKey = 'COD_MUNICIPIO';
    //public $incrementing = false;
    //protected $keyType = 'string';
    public $timestamps = false;
    protected $table = 'MUNICIPIO';
}