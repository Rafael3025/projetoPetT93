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
        Schema::create('sexos', function (Blueprint $table) {
            $table->increments('id_sexo');
            $table->string('sexo',45);
            $table->timestamps();
        });

        \App\Models\Sexos::create([
            'id_sexo' => 1,
            'sexo' => 'não informado'

        ]);
        \App\Models\Sexos::create([
            'id_sexo' => 2,
            'sexo' => 'masculino'

        ]);
        \App\Models\Sexos::create([
            'id_sexo' => 3,
            'sexo' => 'feminino'

        ]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sexos');
    }
};
