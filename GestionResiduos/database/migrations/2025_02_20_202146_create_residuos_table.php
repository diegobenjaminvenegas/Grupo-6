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
    Schema::create('residuos', function (Blueprint $table) {
        $table->id();
        $table->string('tipo');
        $table->double('cantidad');
        $table->date('fecha_generacion');
        $table->string('estado');
        $table->foreignId('empresa_id')->constrained('empresas');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residuos');
    }
};
