<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table="sc_usuario";
    protected $primaryKey="SC_Usuarios_ID";

    public function comite(){
        return $this->hasMany(Comite::class, 'SC_Usuarios_FK_ID', 'SC_Usuarios_ID');
    }
}
