<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisposicionFinal extends Model
{
    use HasFactory;

    protected $table = 'disposicion_final';

    protected $fillable = ['metodo', 'fecha_disposicion'];
}