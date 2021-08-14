<?php

namespace Database\Factories;

use App\Models\Proprety;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropretyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proprety::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      
            return [
                'title' => $this->faker->name,
                'slug' => $this->faker->unique()->safeEmail,
                'purpose' => $this->faker->word,
                'bedrooms' => $this->faker->shuffle(array(1, 2, 3)),
                'bathrooms' => $this->faker->shuffle(array(1, 2, 3)),
                'area' => $this->faker->numberBetween($min = 700, $max = 2000),
                'sale_price' => $this->faker->numberBetween($min = 50000, $max =    400000),
                'rent_price' => $this->faker->numberBetween($min = 1000, $max = 9000),
                'description' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
                'adress' => $this->faker->address,
                'proprety_image' => $this->faker->word,
                'status' => $this->faker->word,
            ];
    }
}
