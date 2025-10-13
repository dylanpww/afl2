<?php

namespace Database\Factories;

use App\Models\Category;
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
            'nama' => $this->faker->name(),
            'harga' => $this->faker->numberBetween(1000000, 3000000),
            'deskripsi' => $this->faker->sentence(),
            'rating' => $this->faker->numberBetween(1, 6),
            'category_id' => Category::inRandomOrder()->first()->id,
            'stock' => $this->faker->numberBetween(1,500),
            'image' =>$this->faker->imageUrl(640, 480, 'products', true)

        ];
    }
}
