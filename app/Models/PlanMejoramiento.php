<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanMejoramiento extends Model
{
    use HasFactory;
    protected $table ="sc_planmejoramiento";
    protected $primaryKey = "SC_PlanMejoramiento_PK_ID";
}
