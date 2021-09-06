<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reglamento extends Model
{
    use HasFactory;
    protected $table = 'sc_reglamento'; // their name isn't reglamentos
    protected $primaryKey = 'SC_Reglamento_PK_ID'; // their name isn't id

    public function faltas(){
        return $this->hasMany(Falta::class, 'SC_TipoFalta_FK_ID', 'SC_Reglamento_PK_ID');
    }

}
