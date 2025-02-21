<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   
     public function up()
     {
         Schema::create('usuarios', function (Blueprint $table) {
             $table->id(); // ID INT PRIMARY KEY
             $table->string('nombre'); // nombre VARCHAR(100)
             $table->string('email')->unique(); // email VARCHAR(100)
             $table->string('contraseña'); // contraseña VARCHAR(100)
             $table->string('rol'); // rol VARCHAR(50)
             $table->timestamps(); // created_at y updated_at
         });
     }
 
     
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
