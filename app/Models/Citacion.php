<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citacion extends Model
{
    use HasFactory;
    protected $table="sc_citacion";
    protected $primaryKey="SC_CitacionPK_Id";
}
