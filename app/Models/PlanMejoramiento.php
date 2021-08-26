<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanMejoramiento extends Model
{
    use HasFactory;
    protected $table ="sc_planmejoramiento";
    protected $primaryKey = "SC_PlanMejoramiento_PK_ID";
    public function acto()
    {
    	return $this->belongsTo(ActoAdministrativo::class, 'SC_ActoAdministrativo_FK_ID', 'SC_ActoAdministrativoSanciones_PK_Id');
    }
}
