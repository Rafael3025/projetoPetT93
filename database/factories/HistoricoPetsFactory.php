<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HistoricoPets>
 */
class HistoricoPetsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_historicoPet' => fake()->numberBetween(1,10),
            'id_pet' => fake()->numberBetween(1,10),
            'HistoricoPet' => fake()->text(),
            'personalidade' => fake()->text(),
            'dt_devolucao' => fake()->dateTimeBetween('-1 year',now()),
            'HistoricoPetscol'=> fake()->text()
        ];
    }
}
