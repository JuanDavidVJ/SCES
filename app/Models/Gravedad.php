<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gravedad extends Model
{
    use HasFactory;
    protected $table = 'sc_gravedad'; // their name isn't tipoFaltas
    protected $primaryKey = 'SC_Gravedad_ID'; // their name isn't id

    public function solicitar(){
        return $this->hasMany(SolicitarComite::class, 'SC_Gravedad_FK', 'SC_Gravedad_ID');
    }
}
