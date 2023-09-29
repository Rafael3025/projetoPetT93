<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Historico_clientes>
 */
class HistoricoClientesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_historico' => fake()->numberBetween(1,10),
            'id_cliente' => fake()->numberBetween(1,10),
            'dt_adocao' => fake()->dateTimeBetween('-1 year',now()),
            'historico' => fake()->text()
        ];
    }
}
