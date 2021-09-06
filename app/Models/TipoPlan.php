<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPlan extends Model
{
  
    use HasFactory;
    protected $table ="sc_tipoplan";
    protected $primaryKey = "SC_TipoPlan_ID";
}
public function ActoAdministrativo(){
        return $this->hasMany(ActoAdministrativo::class, 'SC_Notifacion_ID', 'SC_TipoPlan_ID');
    }
