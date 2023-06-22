<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('archivos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->foreignId('transparencia_id')->constrained(
                table: 'transparencias'
            );

            $table->foreignId('mes_id')->constrained(
                table: 'meses'
            );

            $table->string('titulo_archivo');
            $table->string('archivo');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archivos');
    }
};
