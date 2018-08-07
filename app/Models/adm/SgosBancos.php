<?php

namespace App\Models\adm;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SgosBancos extends Model
{
    protected $table = 'adm_sgos_bancos';
    public $timestamps = true;
    protected $fillable = [
        'id_propiedad', 'desc_banco',
    ];
}
