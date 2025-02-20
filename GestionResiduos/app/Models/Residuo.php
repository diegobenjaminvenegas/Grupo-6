<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residuo extends Model
{
    use HasFactory;

    protected $fillable = ['tipo', 'cantidad', 'fecha_generacion', 'estado', 'empresa_id'];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
}
