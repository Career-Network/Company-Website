<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mentor>
 */
class MentorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'mentor_name' => $this->faker->name(),
            'current_job' => $this->faker->jobTitle(),
            'expertise' => $this->faker->jobTitle(),
            'mentor_about' => $this->faker->realText(20),
            'mentor_pic' => '/tmp/13b73edae8443990be1aa8f1a483bc27.jpg',
        ];
    }
}
