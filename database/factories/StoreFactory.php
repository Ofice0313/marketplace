<?php

namespace Database\Factories;

use App\Models\Store;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Store::class;
    public function definition(): array
    {
        return [
            
            'name' => $this->faker->unique()->company,
            'description' => $this->faker->optional()->text(200),
            'phone' => $this->faker->optional()->phoneNumber,
            'mobile_phone' => $this->faker->optional()->phoneNumber,
            'slug' => $this->faker->unique()->slug,
        ];
    }
}
