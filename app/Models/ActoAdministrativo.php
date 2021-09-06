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
}
// conection whit 
   /* public function TipoPlan(){
        return $this->belongsTo(Aprendiz::class, 'SC_Aprendiz_FK', 'SC_Aprendiz_PK_ID');
    }*/
