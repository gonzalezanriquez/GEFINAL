<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'post_id' => User::factory(),
            'image' => $this->faker->image,
            'created_by' => $this->faker->numerify,
            'updated_by' => $this->faker->numerify,
            'updated_at' => $this->faker->dateTimeBetween
        ];
    }
}
