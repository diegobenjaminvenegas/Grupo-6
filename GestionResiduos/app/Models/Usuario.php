<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'email',
        'contraseña',
        'rol',
    ];

    protected $hidden = [
        'contraseña',
        'remember_token',
    ];

    // Definir alias para 'password' para usar con Laravel Auth
    public function getAuthPassword()
    {
        return $this->contraseña;
    }
}
