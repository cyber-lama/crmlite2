<?php

namespace Database\Factories;

use App\Models\UserData;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'gender' => $this->faker->randomElement(array_keys(UserData::genderList())),
            'birthday' => $this->faker->date('Y-m-d'),
            'region' => $this->faker->address(),
            'city' => $this->faker->streetAddress(),
            'house' => $this->faker->randomNumber()
        ];
    }
}
