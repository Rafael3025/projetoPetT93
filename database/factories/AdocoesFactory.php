<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adocoes>
 */
class AdocoesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_adocoes' => fake()->numberBetween(1,50),
            'id_cliente ' => fake()->numberBetween(1,50),
            'id_pet' => fake()->numberBetween(1,20),
            'id_Status'=> fake()->numberBetween(1,3),
            'dt_inicio'=>  fake()->dateTimeBetween(now(),'+30 week'),
            'dt_inicio_pa'=>  fake()->dateTimeBetween(now(),'+30 week'),
            'dt_devolucao'=> fake()->dateTimeBetween(now(),'+30 week'),
            'descricao'=> fake()->text(),
            'observacao'=> fake()->text()
        ];

    }
}
