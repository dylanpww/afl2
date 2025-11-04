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
        // $category = Category::first();
        Product::create([
            "nama" => "Kasur ler",
            "harga" => 1000000,
            "deskripsi" => "Kasur empuk dengan kualitas top",
            "rating" => 4,
            "category_id" => 1,
            "stock" => 100,
            "image" => "https://cdn.ruparupa.io/fit-in/400x400/filters:format(webp)/filters:quality(90)/ruparupa-com/image/upload/Products/10434041_2.jpg"
        ]);

        Product::create([
            "nama" => "Kasur satria",
            "harga" => 2000000,
            "deskripsi" => "Kasur super empuk dengan kualitas tak tertandingi",
            "rating" => 5,
            "category_id" => 1,
            "stock" => 100,
            "image" => "https://static.pasarwarga.com/imagescrop/product/550/product_9faa76bddbe57b9b4b5e1cbbc70d2b9a.jpeg"
        ]);


        Product::create([
            "nama" => "Foam Elite Supreme",
            "harga" => 1200000,
            "deskripsi" => "Kasur busa lembut dengan kenyamanan maksimal dan daya tahan tinggi.",
            "rating" => 4,
            "category_id" => 1,
            "stock" => 50,
            "image" => "https://lirp.cdn-website.com/4c569d4c/dms3rep/multi/opt/Artikel+21+Ags+Elite+-+Cover-1920w.jpg"
        ]);

        Product::create([
            "nama" => "Foam Serenity Deluxe",
            "harga" => 1300000,
            "deskripsi" => "Kasur busa premium yang memberikan dukungan optimal untuk tulang punggung.",
            "rating" => 5,
            "category_id" => 1,
            "stock" => 70,
            "image" => "https://lirp.cdn-website.com/4c569d4c/dms3rep/multi/opt/Artikel+21+Ags+Elite+-+Poin+1-640w.jpg"
        ]);

        Product::create([
            "nama" => "Foam Comfort Plus",
            "harga" => 900000,
            "deskripsi" => "Pilihan kasur busa terjangkau dengan tingkat kelembutan yang pas untuk tidur nyenyak.",
            "rating" => 4,
            "category_id" => 1,
            "stock" => 80,
            "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfcEOh1grQHtwc7q-gWEItEx5fQrmRijNAUw&s"
        ]);


        Product::create([
            "nama" => "Spring Comfort Pro",
            "harga" => 2500000,
            "deskripsi" => "Spring bed berkualitas tinggi dengan lapisan busa tebal untuk kenyamanan ekstra.",
            "rating" => 5,
            "category_id" => 2,
            "stock" => 60,
            "image" => "https://smb-padiumkm-images-public-prod.oss-ap-southeast-5.aliyuncs.com/product/image/20092023/631a62eb8755a8a989620e89/650a7a9692a0526af34df541/0de0548b97323ee99756018d8ba271.jpeg?x-oss-process=image/resize,m_pad,w_432,h_432/quality,Q_70"
        ]);

        Product::create([
            "nama" => "Spring Majestic King",
            "harga" => 3500000,
            "deskripsi" => "Spring bed ukuran besar dengan teknologi pegas independen untuk tidur bebas guncangan.",
            "rating" => 5,
            "category_id" => 2,
            "stock" => 40,
            "image" => "https://asset.morefurniture.id/NEWS/Ukuran-Kasur-No-1-(King-Size)--Tidur-Lebih-Luas-&-Nyaman.webp"
        ]);

        Product::create([
            "nama" => "Spring Back Pedic",
            "harga" => 2800000,
            "deskripsi" => "Kasur spring bed ergonomis untuk mendukung postur tidur yang sehat.",
            "rating" => 4,
            "category_id" => 2,
            "stock" => 55,
            "image" => "https://www.soho.id/2007-superlarge_default/kasur-guhdo-back-pedic-.jpg"
        ]);

        Product::create([
            "nama" => "Spring Comfort Queen",
            "harga" => 3200000,
            "deskripsi" => "Kasur spring bed queen size yang empuk dan mewah untuk kenyamanan maksimal.",
            "rating" => 5,
            "category_id" => 2,
            "stock" => 50,
            "image" => "https://www.sleepprojectindonesia.com/images/blog/5-macam-dan-perbedaan-ukuran-kasur-single-queen-king-extra-twin.jpeg"
        ]);

        Product::create([
            "nama" => "Spring Elite Standard",
            "harga" => 2200000,
            "deskripsi" => "Spring bed standar dengan kualitas tinggi dan desain elegan.",
            "rating" => 4,
            "category_id" => 2,
            "stock" => 65,
            "image" => "https://awsimages.detik.net.id/community/media/visual/2023/10/24/ukuran-kasur-1_169.png?w=600&q=90"
        ]);


        Product::create([
            "nama" => "Bantal Nyaman Plus",
            "harga" => 150000,
            "deskripsi" => "Bantal empuk yang memberikan kenyamanan kepala dan leher.",
            "rating" => 4,
            "category_id" => 3,
            "stock" => 200,
            "image" => "https://contents.mediadecathlon.com/p2583050/ke9cf7a10e01a5fdb16eaada7d7d71cdc/bantal-berkemah-nyaman-quechua-8549582.jpg?f=1920x0&format=auto"
        ]);

        Product::create([
            "nama" => "Bantal CloudSoft",
            "harga" => 180000,
            "deskripsi" => "Bantal super lembut dengan bahan microfibre premium.",
            "rating" => 5,
            "category_id" => 3,
            "stock" => 180,
            "image" => "https://down-id.img.susercontent.com/file/0936c0dcc0d8495b43fb473bf05b1105"
        ]);

        Product::create([
            "nama" => "Bantal Custom Print",
            "harga" => 200000,
            "deskripsi" => "Bantal dengan desain custom yang bisa disesuaikan dengan selera Anda.",
            "rating" => 5,
            "category_id" => 3,
            "stock" => 150,
            "image" => "https://ciptaloka-mockups.s3.amazonaws.com/design/rw4vvja847-1609-0-2--l.jpg"
        ]);

        Product::create([
            "nama" => "Bantal Ergonomic BeeDreams",
            "harga" => 220000,
            "deskripsi" => "Bantal ergonomis yang dirancang untuk mendukung leher dan kepala secara alami.",
            "rating" => 4,
            "category_id" => 3,
            "stock" => 160,
            "image" => "https://b1584663.smushcdn.com/1584663/wp-content/uploads/2018/10/Bee_Dreams___Erg_4ea11db27a1f9.jpg?lossy=2&strip=1&avif=1"
        ]);

        Product::create([
            "nama" => "Bantal Uniland SoftTouch",
            "harga" => 175000,
            "deskripsi" => "Bantal lembut dan tahan lama dengan sarung yang mudah dicuci.",
            "rating" => 4,
            "category_id" => 3,
            "stock" => 190,
            "image" => "https://unilandsleep.id/cdn/shop/files/Sarung-Bantal-1_2048x.webp?v=1749867774"
        ]);


        Product::create([
            "nama" => "Guling Durasoft Premium",
            "harga" => 250000,
            "deskripsi" => "Guling empuk dengan isi kapas sintetis untuk kenyamanan maksimal.",
            "rating" => 5,
            "category_id" => 4,
            "stock" => 120,
            "image" => "https://d2xjmi1k71iy2m.cloudfront.net/dairyfarm/id/images/194/0619408_PE689062_S4.jpg"
        ]);

        Product::create([
            "nama" => "Guling Baby Comfort",
            "harga" => 180000,
            "deskripsi" => "Guling lembut untuk anak-anak, aman dan nyaman digunakan.",
            "rating" => 4,
            "category_id" => 4,
            "stock" => 140,
            "image" => "https://e7.pngegg.com/pngimages/803/890/png-clipart-bolster-throw-pillows-cushion-infant-pillow-child-furniture.png"
        ]);

        Product::create([
            "nama" => "Guling Lady Americana",
            "harga" => 280000,
            "deskripsi" => "Guling elegan dengan kualitas hotel bintang lima.",
            "rating" => 5,
            "category_id" => 4,
            "stock" => 100,
            "image" => "https://furniturejogja.com/wp-content/uploads/2024/01/lady_americana_lady_americana_femto_guling_full03_hlr3yntc.jpg"
        ]);

        Product::create([
            "nama" => "Guling Bear Hug",
            "harga" => 200000,
            "deskripsi" => "Guling berbentuk boneka beruang lucu, cocok untuk anak-anak.",
            "rating" => 4,
            "category_id" => 4,
            "stock" => 160,
            "image" => "https://www.istana-boneka.com/asset/foto_produk/_SHOPEE_BEAR_BOLSTER_1.jpg"
        ]);

        Product::create([
            "nama" => "Guling Sleep&Co SoftTouch",
            "harga" => 230000,
            "deskripsi" => "Guling premium Durasoft yang ringan namun tetap memberikan dukungan penuh.",
            "rating" => 5,
            "category_id" => 4,
            "stock" => 130,
            "image" => "https://sleepandco.id/wp-content/uploads/2025/07/Guling-Durasoft.png"
        ]);


        // Product::factory()->count(150)->create();
    }
}
