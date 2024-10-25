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
        Schema::create('extraccions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->string('no_registro',50)->unique();
            $table->date('fecha');
            $table->unsignedBigInteger('id_metodo');
            $table->foreign('id_metodo')->references('id')->on('metodos');
            $table->unsignedBigInteger('id_analisis');
            $table->foreign('id_analisis')->references('id')->on('analises');
            $table->string('cong_ng_ul',50);
            $table->string('dato_260_280',50);
            $table->string('dato_260_230',50);
            $table->integer('version')->default(1);
            $table->integer('estatus')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extraccions');
    }
};
