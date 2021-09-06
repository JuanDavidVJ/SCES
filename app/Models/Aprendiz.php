<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    use HasFactory;
    protected $table ="sc_aprendiz";
   	protected $primaryKey = "SC_Aprendiz_PK_ID";

    
    // relation whit SolicitarComite
    public function solicitarComite(){
        return $this->hasMany(SolicitarComite::class, 'SC_Aprendiz_FK', 'SC_Aprendiz_PK_ID');
    }
}
