<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//esto es lo mismo que la tabla notificaciones de la BD
class ActoAdministrativo extends Model
{
    use HasFactory;
    protected $table ="sc_notificaciones";
    protected $primaryKey = "SC_Notificacion_ID";

    // conection whit tipo plan
    public function TipoPlan(){
        return $this->belongsTo(TipoPlan::class, 'SC_Notifiacion_TipoPlan', 'SC_TipoPlan_ID');
    }

// conection whit  Acta de comite
    public function Acta(){
        return $this->belongsTo(ActaComite::class, 'SC_ActaComite_FK', 'SC_ActaComite_PK_ID');
    }
// conection whit tipo de notifiacion
    public function TipoNotifiacion(){
        return $this->belongsTo(TipoNotifiacion::class, 'SC_TipoNotificacion_FK', 'SC_TipoNotificacion_ID');
    }
}
