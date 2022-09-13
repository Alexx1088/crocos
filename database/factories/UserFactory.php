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
                ->format('Y/m/d'),
            'gender' => $this->faker->randomElements(['male', 'female'])[0],
            'knowledge_of_languages' => $this->faker->randomElements(['eng, kaz', 'eng, rus', 'spanish, kaz'])[0],
            'phone' => $this->faker->phoneNumber(),
            'work_experience' => $this->faker->sentence(5),
            'key_skills' => $this->faker->sentence(5),
            'about_me' => $this->faker->sentence(10),
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
