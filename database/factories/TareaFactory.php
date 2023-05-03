<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarea>
 */
class TareaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'nombre'=>$this->faker->sentence(3),
          'descripcion'=>$this->faker->realtext(),
          'estado'=>$this->faker->randomElement(['Pendiente', 'En progreso', 'Completado']),
          'fecha_inicio'=> $this->faker->dateTimeBetween('-15 days','+15 days'),
          'fecha_final'=> $this->faker->dateTimeBetween('+15 days','+30 days'),
          'proyecto_id'=>$this->faker->numberBetween(1,500),
          'usuario_id'=>$this->faker->numberBetween(1,500)
        ];
    }
}
