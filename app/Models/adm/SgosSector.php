<?php

namespace App\Models\adm;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SgosSector extends Model
{
    protected $table = 'adm_sgos_sector';
    public $timestamps = true;
    protected $fillable = [
        'id_propiedad','desc_sector',
    ];
}
