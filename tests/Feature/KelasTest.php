<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Kelas;
use Faker\Factory;

class KelasTest extends TestCase
{
    /** @test */
    public function it_can_create_an_kelas()
    {
        $data = [
            'kelas_category' => $this->faker->sentence(1),
            'description' => $this->faker->sentence(5),
            'kelas_title' => $this->faker->sentence(1),
            'kelas_about' => $this->faker->sentence(2),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'syllabus' => $this->faker->sentence(5),
        ];

        $this->post(route('store-kelas'), $data)
            ->dump()
            ->assertStatus(201)
            ->assertJson(compact('data'));
    }

    /** @test */
    public function it_can_update_an_kelas()
    {
        $data = [
            'kelas_category' => 'kelas update',
            'description' => 'deskripsi update',
            'kelas_title' => $this->faker->sentence(1),
            'kelas_about' => $this->faker->sentence(2),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'syllabus' => $this->faker->sentence(5),
        ];

        $this->put(route('update-kelas',1), $data)
            ->dump()
            ->assertStatus(200)
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_delete_an_kelas()
    {
        $this->delete(route('destroy-kelas',1))->assertStatus(200);
    }    
}