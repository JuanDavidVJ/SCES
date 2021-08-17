<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActoAdministrativo extends Model
{
    use HasFactory;
    protected $table ="sc_actoadministrativosanciones";
    protected $primaryKey = "SC_ActoAdministrativoSanciones_PK_Id";
}
