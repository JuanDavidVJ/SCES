<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;
    protected $table = 'sc_ficha';
    protected $primaryKey = 'SC_Ficha_PK_ID';

     // conection whit usuario
    public function usuario(){
        return $this->belongsTo(Usuario::class, 'SC_Ficha_Gestor', 'SC_Usuarios_ID');
        // This last arguments are because their are not the same that Eloquent determination
    }
    public function aprendiz(){
        return $this->hasMany(Aprendiz::class, 'SC_Ficha_PK_ID', 'SC_Ficha_PK_ID');
    }
}

