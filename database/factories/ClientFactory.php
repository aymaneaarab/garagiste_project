<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'firstName' => $this->faker->name(),
            'lastName' => $this->faker->name(),
            'address' => $this->faker->address(),
            'phoneNumber' => $this->faker->numerify('###-###-####'),
            'userID' => User::inRandomOrder()->first()->id,
        ];
    }
}
