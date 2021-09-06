<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimulos extends Model
{
    use HasFactory;
    protected $table ="sc_estimulos";
    protected $primaryKey = "SC_Estimulos_PK_ID";
    
    public function aprendiz(){
        return $this->belongsTo(Aprendiz::class, 'SC_Aprendiz_FK_ID', 'SC_Aprendiz_PK_ID');
    }
    public function ficha(){
        return $this->belongsTo(Ficha::class, 'SC_Ficha_FK_ID', 'SC_Ficha_PK_ID');
    }
    public function tipoEstimulo(){
        return $this->belongsTo(TipoEstimulos::class, 'SC_TipoEstimulos_FK_ID', 'SC_TipoEstimulos_PK_ID');
        // This last arguments are because their are not the same that Eloquent determination
    }
}
