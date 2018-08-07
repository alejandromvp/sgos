<?php

namespace App\Models\adm;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SgosDivisas extends Model
{
    protected $table = 'adm_sgos_divisas';
    public $timestamps = true;
    protected $fillable = [
        'id_propiedad', 'desc_divisa',
    ];
}
