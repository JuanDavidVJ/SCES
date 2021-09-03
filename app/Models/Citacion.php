<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citacion extends Model
{
    use HasFactory;
    protected $table="sc_citacion";
    protected $primaryKey="SC_CitacionPK_Id";

    // conection whit SolicitarComite
    public function solicitarComite(){
        return $this->belongsTo(SolicitarComite::class, 'SC_Solicitud_FK', 'SC_SolicitarComite_ID');
    }

    // // relation whit comite
    // public function comite(){
    //     return $this->belongsTo(Comite::class, 'SC_Comite_FK_ID', 'SC_Comite_PK_ID');
    // }
}
