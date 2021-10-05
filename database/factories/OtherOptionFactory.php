<?php

namespace Database\Factories;

use App\Models\OtherOption;
use Illuminate\Database\Eloquent\Factories\Factory;

class OtherOptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OtherOption::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Spot_name' => $this->faker->word,
        'Address' => $this->faker->word,
        'Payment' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
