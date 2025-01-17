<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // for ($i = 1; $i <= 6; $i++) {
        //     Product::create([
        //         "product_name" => "Product $i",
        //         "orientation" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci porro debitis eius deserunt odio, repudiandae ad repellendus laboriosam nobis sed?",
        //         "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem temporibus, pariatur, tempore quia officiis at repudiandae dolore assumenda sunt fugiat alias illo nam minus autem dolor voluptate. Dignissimos eum natus ipsum optio neque numquam, voluptatem autem! Officiis, voluptas. Dolorum atque minima, aliquam facilis minus exercitationem aliquid doloremque vero, error qui consequatur quas tempore aspernatur asperiores cupiditate similique? Eius esse excepturi repellat deleniti, asperiores quas magni! Labore facere dicta expedita natus quisquam eaque, aspernatur minima quas nobis mollitia soluta sed id incidunt consequatur recusandae. Asperiores distinctio cum recusandae, odit earum quod vero similique assumenda? Autem perferendis ipsa accusamus id eaque. Sapiente!",
        //         "price" => rand(5000, 30000),
        //         "stock" => rand(10, 100),
        //         "discount" => 0.05,
        //         "image" => env("IMAGE_PRODUCT"),
        //     ]);
        // }
        // gaamRDJEO5xNbQMfgSXx91ZNIVYxid2S110yVkKg.jpg

        Product::create([
            "product_name" => "Toraja Coffee",
            "orientation" => "Dikenal dengan cita rasa yang kaya dan kompleks, Toraja Coffee menawarkan karakteristik unik dari biji kopi yang ditanam di dataran tinggi Sulawesi. Rasakan perpaduan sempurna antara keasaman lembut dan aroma rempah yang khas.",
            "description" => "Lakukan Pemesanan dan info detail dibawah ini",
            "price" => 50000,
            "stock" => 120,
            "discount" => 5,
            "image" => "product/gaamRDJEO5xNbQMfgSXx91ZNIVYxid2S110yVkKg.jpg",
        ]);

        Product::create([
            "product_name" => "Arabica Coffee",
            "orientation" => "Dikenal dengan rasa yang lembut, sedikit asam, dan aroma yang kaya. Dibudidayakan di dataran tinggi dengan proses panen yang teliti. Kopi ini menjadi pilihan utama bagi pecinta rasa premium dan kompleksitas alami",
            "description" => "Lakukan Pemesanan dan info detail dibawah ini",
            "price" => 35000,
            "stock" => 60,
            "discount" => 0,
            "image" => "product/r8e0iS6hEBocNNBRkmTy5uL7BUf9IjNSQmZrgKJy.jpg",
        ]);

        Product::create([
            "product_name" => "Robusta Coffee",
            "orientation" => "Dengan rasa yang kuat dan sedikit pahit, cocok untuk pecinta kopi pekat. Kandungan kafeinnya lebih tinggi dibandingkan Arabica, membuatnya pilihan ideal untuk energi tambahan. Kopi ini sering digunakan dalam campuran espresso karena karakteristiknya yang bold.",
            "description" => "Lakukan Pemesanan dan info detail dibawah ini",
            "price" => 55000,
            "stock" => 70,
            "discount" => 10,
            "image" => "product/Gy6UVqa000obrsMGJaRAzZ4hWEz5WGhu38QawLzC.jpg",
        ]);
    }
}
