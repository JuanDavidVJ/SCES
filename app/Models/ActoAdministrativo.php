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

    // conection with tipo plan
    public function TipoP(){
        return $this->belongsTo(TipoPlan::class, 'SC_Notificacion_TipoPlan', 'SC_TipoPlan_ID');
    }

// conection with  Acta de comite
    public function ActaComite(){
        return $this->belongsTo(ActaComite::class, 'SC_ActaComite_FK', 'SC_ActaComite_PK_ID');
    }
// conection with tipo de notifiacion
    public function TipoN(){
        return $this->belongsTo(TipoNotificacion::class, 'SC_TipoNotificacion_FK', 'SC_TipoNotificacion_ID');
    }
// conection with usuarios
    public function Usuario(){
        return $this->belongsTo(User::class, 'SC_Notificacion_Instructor', 'id');
    }
}
