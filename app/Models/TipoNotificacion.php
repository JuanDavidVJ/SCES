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
        return $this->hasMany(ActoAdministrativo::class, 'SC_Notifacion_ID', 'SC_TipoNotificacion_ID');
    }
}

