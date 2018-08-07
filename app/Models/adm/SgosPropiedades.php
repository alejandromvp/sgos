<?php

namespace App\Models\adm;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SgosPropiedades extends Model
{
    protected $table = 'adm_sgos_propiedades';
    public $timestamps = true;
    protected $fillable = [
        'desc_propiedad',
    ];
}
