<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidencias extends Model
{
    use HasFactory;
    protected $table ="sc_evidencias";
    protected $primaryKey = "SC_Evidencias_PK_ID";
}
