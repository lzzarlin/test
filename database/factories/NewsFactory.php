<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => 1,
            'user_id' => $this->faker->numberBetween(1,2),
            'title' => $this->faker->sentence,
            'slug' => Str::random(10),
            'thumpic' => '',
            'keywords' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'body'=> $this->faker->sentence,
        ];
    }
}
