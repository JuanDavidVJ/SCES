<?php

namespace App\Models;

use App\Http\Controllers\RegistroUsuarios;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    use HasFactory;
    protected $table ="sc_tipousuario";
    protected $primaryKey = "SC_TipoUsuario_PK_ID";

    //la relacion con el registro de usuarios
    public function RegistrarUsuarios(){
        return $this->hasMany(RegistroUsuarios::class, 'id', 'SC_TipoUsuario_PK_ID');
    }
}
