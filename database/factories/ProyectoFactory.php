<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proyecto>
 */
class ProyectoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->name(),
            'descripcion'=>$this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'fecha_inicio'=>$this->faker->dateTimeBetween('-1 years','+1 years'),
            'fecha_fin'=>$this->faker->dateTimeBetween('+1 years','+2 years'),
        ];
    }
}
