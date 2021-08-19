<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impugnacion extends Model
{
    use HasFactory;
    protected $table ="sc_impugnacion";
    protected $primaryKey = "SC_Impugnacion_PK_ID";
}
