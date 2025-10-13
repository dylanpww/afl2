<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'nama' => 'foam_bed',
            'image' => 'https://thesleepcompany.in/cdn/shop/articles/Is-Memory-Foam-Mattress-Good-For-Summer_1_1dc790f0-1aa4-49f7-b4b0-9f55435658db_large.jpg?v=1758016566'
        ]);
        Category::create([
            'nama' => 'spring_bed',
            'image'=> 'https://springbedmewah.com/wp-content/uploads/2022/01/promo-kasur-dreamline-springbed-luxor.jpg'
        ]);
        Category::create([
            'nama' => 'bantal',
            'image'=> 'https://furniturejogja.com/wp-content/uploads/2021/08/bantal-tidur-terbaik-e1629514126933.jpg'
        ]);
        Category::create([
            'nama' => 'guling',
            'image'=>'https://laz-img-sg.alicdn.com/p/ae5cceff1fab8f8c468cf32c3e7d1493.jpg'
        ]);
    }
}
