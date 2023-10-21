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
        Schema::create('inscricaos', function (Blueprint $table) {
            $table->id();
            $table->string('flag');
            $table->bigInteger('id_candidato')->unsigned();
            $table->foreign('id_candidato')->references('id')->on('candidatos');
            $table->bigInteger('id_vaga')->unsigned();
            $table->foreign('id_vaga')->references('id')->on('vagas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
