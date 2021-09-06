<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActaComite extends Model
{
    use HasFactory;
    protected $table="sc_actacomite";
    protected $primaryKey="SC_ActaComite_PK_ID";

    public function ActoAdministrativo(){
        return $this->hasMany(ActoAdministrativo::class, 'SC_Notifacion_ID', 'SC_ActaComite_PK_ID');
    }
}
