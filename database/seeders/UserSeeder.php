<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        \DB::table("users")->insert([
            "first_name" => $faker->firstName(), // XZ может и не так пишется обращение к firstName
            "last_name" => $faker->lastName(),
            "email" => $faker->unique()->safeEmail,
            "password" => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
    }
}