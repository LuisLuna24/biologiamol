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
        Schema::create('version_analises', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('analisis_id');
            $table->foreign('analisis_id')->references('id')->on('analises');
            $table->string('nombre',50);
            $table->string('nombre_anterior',50);
            $table->string('razon_cambio',250);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('version_analises');
    }
};
