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
        Schema::create('historicoPets', function (Blueprint $table) {
            $table->increments('id_historicoPet');
            $table->integer('id_pet');
            $table->text('historicoPet');
            $table->text('personalidade');
            $table->dateTime('dtDevolucao');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historicoPets');
    }
};
