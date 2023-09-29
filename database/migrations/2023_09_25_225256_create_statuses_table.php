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
        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('id_status');
            $table->string('status', 45);
            $table->timestamps();
            $table->softDeletes();
        });
        App\Models\status::create([
            'id_status' => 1,
            'status' => 'Em Andamento'
        ]);
        App\Models\status::create([
            'id_status' => 2,
            'status' => 'Adotado'
        ]);
        App\Models\status::create([
            'id_status' => 3,
            'status' => 'Devolucao'
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statuses');
    }
};
