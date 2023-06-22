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
        Schema::create('transparencias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre')->unique();
            $table->enum('tipo',['Transparencia','Rendición de cuentas']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transparencias');
    }
};
