<?php

namespace Database\Factories;

use App\Models\Places;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlacesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Places::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Region' => $this->faker->word,
        'Country' => $this->faker->word,
        'Zipcode' => $this->faker->randomDigitNotNull,
        'Description' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
