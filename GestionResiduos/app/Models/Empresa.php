<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'ubicacion', 'sector'];

    public function residuos()
    {
        return $this->hasMany(Residuo::class);
    }

    public function reportes()
    {
        return $this->hasMany(Reporte::class);
    }
}
