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
        Schema::create('historico_adocoes', function (Blueprint $table) {
            $table->increments('id_historico_adocao');
            $table->int('id_adocao');
            $table->dateTime('dt_adocao');
            $table->dateTime('dt_devolucao');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historicoAdocoes');
    }
};
