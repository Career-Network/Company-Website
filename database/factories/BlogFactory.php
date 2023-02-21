<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2),
            'image' => 'default.jpg',
            'body' => $this->faker->realText(200),
            'author' => $this->faker->name(),
            'update_date' => $this->faker->date(),
            'hastags' => 'tes,aa,sss',
        ];
    }
}
