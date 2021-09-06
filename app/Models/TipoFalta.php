<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoFalta extends Model
{
    use HasFactory;
    protected $table = 'sc_tipofalta'; // their name isn't tipoFaltas
    protected $primaryKey = 'SC_TipoFalta_PK_ID'; // their name isn't id

    public function faltas(){
        return $this->hasMany(Falta::class, 'SC_TipoFalta_FK_ID', 'SC_TipoFalta_PK_ID');
    }
}

