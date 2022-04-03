<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition()
    {
        return [
            "name" => $this->faker->lastName(),
            "firstname" => $this->faker->firstName(),
            "age" => $this->faker->numberBetween(30,38),
            "telnumber" => $this->faker->phoneNumber(),
            "email" => $this->faker->email(),
            "gender" => $this->faker->randomElement(["F", "M"]),
            "country" => $this->faker->randomElement(["Taiwan", "France", "Australia", "Spain"]),
            "team_id" => $this->faker->numberBetween(1,5),
            "role_id" => $this->faker->numberBetween(1,4),
            // "role" => "Substitute",
            // "role_id" => 4,
        ];
    }
}
