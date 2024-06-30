<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Classroom;
use App\Models\Lesson;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lesson_id'=>Lesson::inRandomOrder()->first()->id,
            'student_id'=>Student::inRandomOrder()->first()->id,
            'price' => $this->faker->randomFloat(2, 10, 2500),
        ];
    }
}
