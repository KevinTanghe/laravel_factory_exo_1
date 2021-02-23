<?php

namespace Database\Factories;

use App\Models\Eleve;
use Illuminate\Database\Eloquent\Factories\Factory;

class EleveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Eleve::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "firstname" => $this->faker->firstName,
            "lastname" => $this->faker->lastName,
            "age" => $this->faker->numberBetween(10, 30),
            "etat" => $this->faker->boolean
        ];
    }
}
