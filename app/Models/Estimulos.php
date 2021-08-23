<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimulos extends Model
{
    use HasFactory;
    protected $table ="sc_estimulos";
    protected $primaryKey = "SC_Estimulos_PK_ID";
}
