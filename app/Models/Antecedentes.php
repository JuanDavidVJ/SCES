<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antecedentes extends Model
{
    use HasFactory;

    protected $table = 'sc_antecedentes';
    protected $primaryKey = 'SC_Antecedentes_PK_ID';
}
