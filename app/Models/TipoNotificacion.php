<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoNotificacion extends Model
{
    use HasFactory;

    protected $table ="sc_tiponotificacion";
    protected $primaryKey = "SC_TipoNotificacion_ID";

    public function ActoAdministrativo(){
        return $this->hasMany(ActoAdministrativo::class, 'SC_TipoNotificacion_FK', 'SC_TipoNotificacion_ID');
    }
}

