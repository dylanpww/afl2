<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;
use App\Models\Category;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::first();
        Product::create([
            "nama" => "Artisan",
            "harga" => 1000000,
            "deskripsi" => "Kasur empuk dengan kualitas top",
            "rating" => 4,
            "category_id" => $category->id,
            "stock"=>100,
            "image"=>"https://picsum.photos/800/500?random=1"
        ]);

        Product::create([
            "nama" => "Tamron",
            "harga" => 2000000,
            "deskripsi" => "Kasur super empuk dengan kualitas tak tertandingi",
            "rating" => 5,
            "category_id" => $category->id,
            "stock"=>100,
            "image" => "https://picsum.photos/800/500?random=2"
        ]);

        Product::factory()->count(150)->create();
    }
}
