<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActaComite extends Model
{
    use HasFactory;
    protected $table="sc_actacomite";
    protected $primaryKey="SC_ActaComite_PK_ID";

    public function citacion(){
        return $this->belongsTo(Citacion::class, 'SC_Citacion_FK', 'SC_CitacionPK_Id');
        // This last arguments are because their are not the same that Eloquent determination
    }

    public function recursos(){
        return $this->hasMany(Recursos::class, 'SC_ActaComite_FK', 'SC_ActaComite_PK_ID');
    }

    public function notificaciones(){
        return $this->hasMany(ActoAdministrativo::class, 'SC_ActaComite_FK', 'SC_ActaComite_PK_ID');
    }
}
