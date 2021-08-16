<?php

namespace Database\Factories;

use App\Models\ClientData;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClientData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'phone' => $this->faker->unique()->phoneNumber(),
            'region' => $this->faker->address(),
            'city' => $this->faker->city(),
            'street' => $this->faker->streetAddress(),
            'house' => $this->faker->randomNumber()
        ];
    }
}
