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
        Rating::create([
            'star' => 4,
            'comment' => 'barang mantap, pengiriman cepet banget'
        ]);

        Rating::create([
            'star' => 2,
            'comment' => 'nggak sesuai ekspektasi, agak kecewa'
        ]);

        Rating::create([
            'star' => 5,
            'comment' => 'perfect! bakal beli lagi sih ini'
        ]);

        Rating::create([
            'star' => 1,
            'comment' => 'parah, barang rusak pas sampe'
        ]);

        Rating::create([
            'star' => 4,
            'comment' => 'lumayan bagus, cuma packaging kurang rapi'
        ]);

        Rating::create([
            'star' => 3,
            'comment' => 'oke lah, standar aja tapi fungsional'
        ]);

        Rating::create([
            'star' => 5,
            'comment' => 'super recommended! kualitas premium'
        ]);

        Rating::create([
            'star' => 2,
            'comment' => 'warnanya beda sama foto'
        ]);

        Rating::create([
            'star' => 4,
            'comment' => 'barang sesuai deskripsi, worth it lah'
        ]);

        Rating::create([
            'star' => 1,
            'comment' => 'pengiriman lama banget, kecewa berat'
        ]);
    }
}
