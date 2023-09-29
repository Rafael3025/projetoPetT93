<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pets>
 */
class PetsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_pet' => fake()->numberBetween(1,4),
            'nome' => fake()->name(),
            'idade' => fake()->numberBetween(1,15),
            'descrição' => fake()->text()
        ];
    }
}
