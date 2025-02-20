<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transporte extends Model
{
    use HasFactory;

    protected $fillable = ['empresa_transporte', 'fecha_transporte'];
}