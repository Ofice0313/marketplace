<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'name' => $this->faker->unique()->word,
            'description' => $this->faker->optional()->text(200),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'body' => $this->faker->paragraph(5, true),
            'slug' => $this->faker->unique()->slug,
        ];
    }
}
