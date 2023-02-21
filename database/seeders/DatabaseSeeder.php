<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //create 10 users
        \App\Models\User::factory()->count(5)->create()->each(function ($user) {
            //create 5 posts for each user
            \App\Models\Blog::factory()->count(2)->create(['user_id'=>$user->id])->each(function ($blog) {
                \App\Models\Schedule::factory()->count(2)->create(['blog_id'=>$blog->id]);
            });
        });
    }
}
