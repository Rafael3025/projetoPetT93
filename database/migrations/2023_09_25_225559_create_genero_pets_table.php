<?php

use App\Models\GeneroPets;
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
        Schema::create('generoPets', function (Blueprint $table) {
            $table->increments('id_genero');
            $table->integer('id_pet');
            $table->string('genero',45);
            $table->timestamps();
            $table->softDeletes();
        });

        \App\Models\GenerosPets::create([
            'id_genero' => 1,
            'genero' => 'masculino'

        ]);
        \App\Models\GenerosPets::create([
            'id_genero' => 2,
            'genero' => 'feminino'

        ]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generoPets');
    }
};
