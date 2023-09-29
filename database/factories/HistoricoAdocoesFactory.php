<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Historico_adocoes>
 */
class HistoricoAdocoesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_HistoricoAdocacao'=>fake()->numberBetween(1,50),
            'id_adocao' => fake()->numberBetween(1,50),
            'dt_adocoes'=>fake()->dateTimeBetween(now(),'+30 week'),
            'historico' => fake()->text(),

        ];
    }
}
