<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recursos extends Model
{
    use HasFactory;

    protected $table = 'sc_recursos_reposicion';
    protected $primaryKey = 'SC_Recursos_ID';

    public function actoComites()
    {
        return $this->belongsTo(ActaComite::class, 'SC_ActaComite_FK', 'SC_ActaComite_PK_ID');
    }
}
