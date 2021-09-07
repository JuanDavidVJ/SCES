<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citacion extends Model
{
    use HasFactory;
    protected $table="sc_citacion";
    protected $primaryKey="SC_CitacionPK_Id";

    // conection with SolicitarComite
    public function solicitarComite(){
        return $this->belongsTo(SolicitarComite::class, 'SC_Solicitud_FK', 'SC_SolicitarComite_ID');
    }

    public function actacomite(){
        return $this->hasMany(ActaComite::class, 'SC_Citacion_FK', 'SC_CitacionPK_Id');
    }
}
