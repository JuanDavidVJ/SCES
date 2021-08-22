<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoNovedad extends Model
{
    use HasFactory;
    protected $table ="sc_tiponovedades";
    protected $primaryKey = "SC_TipoNovedades_PK_ID";
}
