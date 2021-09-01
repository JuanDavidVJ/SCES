<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comite extends Model
{
    use HasFactory;
    protected $table ="sc_comite";
    protected $primaryKey = "SC_Comite_PK_ID";

    public function usuario(){
        return $this->belongsTo(Usuario::class, 'SC_Usuarios_FK_ID', 'SC_Usuarios_ID');
    }
    public function falta(){
        return $this->belongsTo(Falta::class, 'SC_Falta_FK_ID', 'SC_Falta_PK_ID');
        // This last arguments are because their are not the same that Eloquent determination
    }
    /*public function evidencia(){
        return $this->belongsTo(Evidencias::class, 'SC_Evidencias_FK_ID', 'SC_Evidencias_PK_ID');
        // This last arguments are because their are not the same that Eloquent determination
        //LLAVE FORANEA DE EVIDENCIA
    }*/
}
