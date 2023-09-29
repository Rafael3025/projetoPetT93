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
        Schema::create('portes', function (Blueprint $table) {
            $table->increments('id_porte');
            $table->int('id_pet');
            $table->string('porte',45);
            $table->timestamps();
            $table->softDeletes();
        });

        \App\Models\Portes::create([
          'id_porte' => 1,
          'porte' => 'não informado'
        ]);
        \App\Models\Portes::create([
            'id_porte' => 2,
            'porte' => 'pequeno'
          ]);
          \App\Models\Portes::create([
            'id_porte' => 3,
            'porte' => 'medio'
          ]);
          \App\Models\Portes::create([
            'id_porte' => 4,
            'porte' => 'grande'
          ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portes');
    }
};
