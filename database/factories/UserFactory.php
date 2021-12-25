<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{

    /*    protected $model = User::class;*/

    public function definition()
    {
        return [
            "first_name" => $this->faker->firstName(),
            "last_name" => $this->faker->lastName(),
            "email" => $this->faker->unique()->safeEmail,
            "password" => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            "role_id" => \App\Models\Role::inRandomOrder()->first()->id,
        ];
    }

/*    public function unverified()  ЗАКОМИТИЛ ЭТУ ХУНЮ В 17 ЛЕКЦИИ, НАХ ОНА ВАЩЕ НУЖНА?
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }*/
}
