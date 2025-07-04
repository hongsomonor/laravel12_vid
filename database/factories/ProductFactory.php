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
            "pro_name" => $this->faker->words(2 , true),
            "pro_qty" => $this->faker->numberBetween(1 , 100),
            "pro_price" => $this->faker->randomFloat(2,10,100),
            "created_at" => now(),
            "updated_at"=> now(),
        ];
    }
}
