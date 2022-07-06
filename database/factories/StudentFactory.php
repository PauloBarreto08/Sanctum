<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    protected $model = \App\Models\Student::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $turmas = array(
        //     'turmaA' => 'A',
        //     'turmaB' => 'B',
        //     'turmaC' => 'C'
        // );
        // $keyTurma = array_rand($turmas);
        return [
            'name' => $this->faker->firstName,
            'idade' => $this->faker->numberBetween(15, 18),
            // 'turma' => $this->$turmas[$this->$keyTurma],
            'turma' => 'A',
            'matricula' => $this->faker->ean8,
            // 'classroom_id' => \App\Models\Classroom::factory()->create()->classroom_id,
            'classroom_id' => $this->faker->numberBetween(1, 3),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
