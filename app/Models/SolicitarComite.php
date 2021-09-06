<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitarComite extends Model
{
    use HasFactory;
    protected $table="sc_solicitar_comite";
    protected $primaryKey="SC_SolicitarComite_ID";

    // conection whit aprendiz
    public function aprendiz(){
        return $this->belongsTo(Aprendiz::class, 'SC_Aprendiz_FK', 'SC_Aprendiz_PK_ID');
    }

    // conection whit tipofalta
    public function tipofalta(){
        return $this->belongsTo(TipoFalta::class, 'SC_Falta_FK', 'SC_TipoFalta_PK_ID');
        // This last arguments are because their are not the same that Eloquent determination
    }

    public function usuario(){
        return $this->belongsTo(Usuario::class, 'SC_Usuario_FK', 'SC_Usuarios_ID');
        // This last arguments are because their are not the same that Eloquent determination
    }

    // relation whit Gravedad
    public function gravedad(){
        return $this->belongsTo(Gravedad::class, 'SC_Gravedad_FK', 'SC_Gravedad_ID');
    }
    
    // relation whit Reglamento
    public function reglamento(){
        return $this->belongsTo(Reglamento::class, 'SC_Reglamento_FK', 'SC_Reglamento_PK_ID');
    }
}
