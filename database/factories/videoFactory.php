<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\video>
 */
class videoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name() ,
            'url' => $this->faker->url() ,
            'length' => $this->faker->randomNumber(3) ,
            'thumbnail' => 'https://loremflickr.com/446/240/world?random='.rand(1,99),
            'slug' => $this->faker->slug() ,
            'description' => $this->faker->realText()
        ];
    }
}
