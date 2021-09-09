<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Oppo Mobile',
                'price' => '500',
                'description' => 'A smartphone with 8gb ram and much more feature',
                'category' => 'mobile',
                'gallery' => 'https://static.toiimg.com/thumb/resizemode-4,msid-71082571,imgsize-200,width-640/71082571.jpg'
            ],
            [
                'name' => 'LG TV',
                'price' => '1200',
                'description' => 'Le choix le plus intelligent La Smart TV avec WebOS primée de LG facilite',
                'category' => 'televiseurs',
                'gallery' => 'https://www.lg.com/tn/images/televiseurs/md05823579/gallery/medium01.jpg'
            ],
            [
                'name' => 'Sony Tv',
                'price' => '1500',
                'description' => 'Zones de LED éclaircies ou obscurcies indépendamment',
                'category' => 'televiseurs',
                'gallery' => 'https://www.sony.com/image/916e1ca5c3b64c3947acae853da7ad07?fmt=pjpeg&wid=660&hei=660&bgcolor=F1F5F9&bgc=F1F5F9'
            ],
            [
                'name' => 'Sony Mobile',
                'price' => '1100',
                'description' => 'Le Sony Xperia 1 II est un haut de gamme annoncé le 24 février 2020. ',
                'category' => 'mobile',
                'gallery' => 'https://images.frandroid.com/wp-content/uploads/2020/02/sony-xperia-1-ii-frandroid-2020-1.png'
            ],

        ]);
    }
}
