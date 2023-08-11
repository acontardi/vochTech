<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CollaboratorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'unidade_id' => rand(1, 100),
            'nome' => fake()->name,
            'cpf' => fake()->unique()->numerify('###########'),
            'email' => fake()->unique()->safeEmail,
        ];
    }
}
