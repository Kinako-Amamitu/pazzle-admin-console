<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = User::class;

    public function definition(): array
    {
        $scheduled_date = $this->faker->dateTimeBetween('+1day', '+1year');
        return [
            'player_name' => $this->faker->unique()->name(),
            'level' => $this->faker->numberBetween(1, 100),
            'exp' => $this->faker->randomNumber(5),
            'hp' => $this->faker->randomNumber(1),
            'created_at' => $scheduled_date->format('Y-m-d H:i:s'),
            'updated_at' => $scheduled_date->modify('+1hour')->format('Y-m-d H:i:s')
        ];
    }
}
