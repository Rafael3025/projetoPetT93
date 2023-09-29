<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contatos>
 */
class ContatosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_contato' => fake()->numberBetween(1,10),
            'id_cliente' => fake()->numberBetween(1,10),
            'email' => fake()->email(),
            'descrição' => fake()->text()
        ];
    }
}
