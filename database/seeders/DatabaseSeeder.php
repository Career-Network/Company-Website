<?php

namespace Database\Seeders;

use App\Models\Blog;
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
        // $this->call(UserSeeder::class);
        // $this->call(BlogSeeder::class);

        //create 5 users
        \App\Models\User::factory()->count(5)->create()->each(function ($user) {
            //create 2 blog for each user
            \App\Models\Blog::factory()->count(2)->create(['user_id'=>$user->id])->each(function ($blog) {
                \App\Models\Schedule::factory()->count(2)->create(['blog_id'=>$blog->id]);
            });
        });

        \App\Models\Kelas::factory()->count(5)->create()->each(function ($kelas) {
            //create 2 mentor for each user
            \App\Models\Mentor::factory()->count(2)->create(['kelas_id'=>$kelas->id]);
            //create 2 testimony for each user
            \App\Models\Testimony::factory()->count(2)->create(['kelas_id'=>$kelas->id]);
        });
    }
    
}