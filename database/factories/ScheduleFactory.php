<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'set_date' => $this->faker->dateTime()->format('Y-m-d H:i:s'),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
