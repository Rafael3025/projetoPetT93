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
        Schema::create('adocoes', function (Blueprint $table) {
            $table->increments('id_adocao');
            $table->int('id_cliente');
            $table->int('id_pet');
            $table->int('id_status');
            $table->date('dt_inicio');
            $table->date('dt_inicio_pa');
            $table->date('dt_devolucao');
            $table->string('descricao', 200);
            $table->string('observacao', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adocoes');
    }
};
