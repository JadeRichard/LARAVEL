<?php

namespace Database\Factories;

use App\Models\Equipe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EquipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName(),
            'ville' => $this->faker->city(),
            'commune' => $this->faker->text(),
            'nbrjoueurs' => $this->faker->buildingNumber(),
            'nbrpostes' => $this->faker->buildingNumber(),
        ];
    }
}
