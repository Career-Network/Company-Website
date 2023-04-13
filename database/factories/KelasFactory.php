<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kelas_cover' => '/tmp/13b73edae8443990be1aa8f1a483bc27.jpg',
            'kelas_category' => $this->faker->sentence(1),
            'description' => $this->faker->sentence(5),
            'kelas_title' => $this->faker->sentence(1),
            'kelas_about' => $this->faker->sentence(2),
            'kelas_price' => 100,
            'kelas_loc' => $this->faker->randomElement(['Zoom Meeting', 'Google Meet']),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'syllabus' => $this->faker->sentence(5)
        ];
    }
}
