<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UNIDADES_FEDERATIVAS extends Model
{
    protected $primaryKey = 'SGL_UNIDADE_FEDERATIVA';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = 'UNIDADE_FEDERATIVA';
}