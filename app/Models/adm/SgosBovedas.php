<?php

namespace App\Models\adm;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SgosBovedas extends Model
{
    protected $table = 'adm_sgos_bovedas';
    public $timestamps = true;
    protected $fillable = [
        'id_propiedad', 'desc_boveda',
    ];
}
