<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'classroom_id' => \App\Models\Student::factory()->create()->classroom_id,
          
            'turma' => 'A',
            'horario' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'sala' => $this->faker->numberBetween(1, 10),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
