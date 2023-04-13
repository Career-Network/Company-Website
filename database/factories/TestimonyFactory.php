<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimony>
 */
class TestimonyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'participant_name' => $this->faker->name(),
            'class_name' => $this->faker->sentence(2),
            'testimonial' => $this->faker->realText(20),
            'participant_pic' => '/tmp/13b73edae8443990be1aa8f1a483bc27.jpg',
            'featured_landing_page' => $this->faker->randomElement(['0', '1']),
            'featured_class_page' => $this->faker->randomElement(['0', '1']),
            'participant_prof' => $this->faker->sentence(2),
        ];
    }
}
