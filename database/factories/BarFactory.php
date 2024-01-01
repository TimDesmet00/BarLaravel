<?php

namespace Database\Factories;

use App\Models\Bar;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->unique()->company,
            'adresse' => $this->faker->streetAddress,
            'ville' => $this->faker->city,
            'description' => $this->faker->paragraph,
            'note' => $this->faker->numberBetween(1, 5),
        ];
    }
}