<?php

namespace Database\Factories;

use App\Models\TouristSpot;
use Illuminate\Database\Eloquent\Factories\Factory;

class TouristSpotFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TouristSpot::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Tourist_spot' => $this->faker->word,
        'description' => $this->faker->word,
        'Expenses' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
