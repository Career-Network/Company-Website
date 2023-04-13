<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Mentor;
use App\Models\Kelas;
use Faker\Factory;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class MentorTest extends TestCase
{
    /** @test */
    public function it_can_create_an_mentor()
    {
        Storage::fake('mentor');

        $data = [
            'mentor_name' => $this->faker->name(),
            'current_job' => $this->faker->jobTitle(),
            'mentor_about' => $this->faker->realText(20),
            'mentor_pic' => UploadedFile::fake()->image('avatar.jpg'),
            'kelas_id' => Kelas::factory()->create()->id,
        ];

        $this->post(route('store-mentor'), $data)
            ->dump()
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_update_an_mentor()
    {
        Storage::fake('mentor');

        $data = [
            'mentor_name' => 'ini update',
            'current_job' => $this->faker->jobTitle(),
            'mentor_about' => $this->faker->realText(20),
            'mentor_pic' => UploadedFile::fake()->image('avatar.jpg'),
            'kelas_id' => 7,
        ];

        $this->put(route('update-mentor',1), $data)
            ->dump()
            ->assertStatus(200)
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_delete_an_mentor()
    {
        $this->delete(route('destroy-mentor',1))->assertStatus(200);
    }
}