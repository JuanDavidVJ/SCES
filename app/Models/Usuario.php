<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table="sc_usuario";
    protected $primaryKey="SC_Usuarios_ID";

    public function solicitar(){
        return $this->hasMany(SolicitarComite::class, 'SC_Usuario_FK', 'SC_Usuarios_ID');
    }
    public function ActoAdministrativo(){
        return $this->hasMany(ActoAdministrativo::class, 'SC_Notificacion_Instructor', 'SC_Usuarios_ID');
    }
}
