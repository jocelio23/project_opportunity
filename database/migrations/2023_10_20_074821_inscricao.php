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
            $table->string('candidato');
            $table->string('vaga');
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
