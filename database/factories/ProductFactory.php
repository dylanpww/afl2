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
            'image' => $this -> faker-> randomElement([
                'https://asset.morefurniture.id/NEWS/2022/springbed-olympic-no-2-160x200-ayana.jpg',
                'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT86rWFbYLBe00UVjydCuUMQLWjaVuy6B-BWA&s',
                'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT86rWFbYLBe00UVjydCuUMQLWjaVuy6B-BWA&s',
                'https://w7.pngwing.com/pngs/325/153/png-transparent-bolster-cushion-meditation-mandala-cotton-linen-texture-white-rectangle-cushion.png',
                'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTMjmr6nF3Jo27bfG44_6OIu1a3mdLWuJ9Ig&s',
                'https://turubed.com/_next/image?url=https%3A%2F%2Fturubed-com.s3.ap-southeast-3.amazonaws.com%2Fplatform%2Fproduct%2Fproduct_banner_1721115525.png&w=3840&q=75',
                'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnJmpofHaI73zCIv1z93Q0fz3HaiJhYxZ3dQ&s'
            ])
        ];
    }
}
