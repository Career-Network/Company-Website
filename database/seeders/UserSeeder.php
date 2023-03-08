<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           "role_name" => "Writer",
           "username" => "farhantsyh",
           "password" => Hash::make("123"),
           "id" => 1,
        ]);

        User::create([
           "role_name" => "Admin",
           "username" => "gustonecrush",
           "password" => Hash::make("123"),
           "id" => 2,
        ]);
    }
}