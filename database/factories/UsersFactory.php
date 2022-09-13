<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = User::class;

    public function definition()
    {
        return ;/* [
            'knowledge_of_languages' => $this->faker->randomElements(['eng, kaz', 'eng, rus', 'spanish, kaz'])[0],
            'phone' => $this->faker->phoneNumber(),
            'work_experience' => $this->faker->sentence(5),
            'key_skills' => $this->faker->sentence(5),
            'about_me' => $this->faker->sentence(10),
        ];*/
    }
}
