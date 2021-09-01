<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitarComite extends Model
{
    use HasFactory;
    protected $table="sc_solicitar_comite";
    protected $primaryKey="SC_SolicitarComite_ID";

    public function aprendiz(){
        return $this->belongsTo(Aprendiz::class, 'SC_Aprendiz_FK', 'SC_Aprendiz_PK_ID');
    }
    public function falta(){
        return $this->belongsTo(Falta::class, 'SC_Falta_FK', 'SC_Falta_PK_ID');
        // This last arguments are because their are not the same that Eloquent determination
    }
    public function usuario(){
        return $this->belongsTo(Usuario::class, 'SC_Usuario_FK', 'SC_Usuarios_ID');
        // This last arguments are because their are not the same that Eloquent determination
    }
}
