<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novedad extends Model
{
    use HasFactory;
    protected $table ="sc_novedades";
    protected $primaryKey = "SC_Novedades_PK_ID";

    public function aprendiz(){
        return $this->belongsTo(Aprendiz::class, 'SC_Aprendiz_FK_ID', 'SC_Aprendiz_PK_ID');
    }
}
