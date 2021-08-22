<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LlamadosAtencion extends Model
{
    use HasFactory;

    protected $table = 'sc_llamado_atencion';
    protected $primaryKey = 'SC_Llamado_Atencion_PK_ID';
}
