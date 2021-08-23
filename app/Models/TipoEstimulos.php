<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEstimulos extends Model
{
    use HasFactory;
    protected $table ="sc_tipoestimulos";
    protected $primaryKey = "SC_TipoEstimulos_PK_ID";
}
