<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'patronymic' => $this->faker->firstNameMale(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2
            .uheWG/igi', // password
            'data_of_birth' => $this->faker->dateTimeBetween('1970-01-01', '2003-12-31')
                ->format('d/m/Y'),
            'gender' => $this->faker->randomElements(['male', 'female']),
            'knowledge of languages' => $this->faker->randomElements(['eng, kaz', 'eng, rus', 'spanish, rus']),
            'phone' => $this->faker->phoneNumber,
            'work experience' => $this->faker->text(5),
            'key skills' => $this->faker->text(5),
            'about me' => $this->faker->text(10),

            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
