<?php

namespace Database\Seeders;

use App\Models\Rating;

use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rating::create([
            'star' => 5,
            'comment' => 'top tenan iki kualitas e, ga main main'
        ]);
        Rating::create([
            'star' => 3,
            'comment' => 'kualitas biasa saja'
        ]);

        Rating::factory()->count(10)->create();
    }
}
