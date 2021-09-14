<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'documento',
        'email',
        'password',
        'tipoUsuario'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table="users";
    protected $primaryKey="id";

    public function solicitar(){
        return $this->hasMany(SolicitarComite::class, 'SC_Usuario_FK', 'id');
    }
    public function ActoAdministrativo(){
        return $this->hasMany(ActoAdministrativo::class, 'SC_Notificacion_Instructor', 'id');
    }
}
