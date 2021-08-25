<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Falta extends Model
{
    use HasFactory;
    protected $table = 'sc_falta'; // table specification 'cause their name is direffert from faltas
    protected $primaryKey = 'SC_Falta_PK_ID'; // pk specification 'cause their name is direffert from faltas
    
    public function reglamento(){
        return $this->belongsTo(Reglamento::class, 'SC_TipoFalta_FK_ID', 'SC_Reglamento_PK_ID');
    }
    public function tipoFalta(){
        return $this->belongsTo(TipoFalta::class, 'SC_TipoFalta_FK_ID', 'SC_TipoFalta_PK_ID');
        // This last arguments are because their are not the same that Eloquent determination
    }
}
