<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            [
                'nome' => 'Oppo movel',
                "preco" => "300",
                "descricao" => "Um smartphone com 8gb de ram e muito mais recursos",
                "categoria" => "movel",
                "galeria" => "https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'nome' => 'Panasonic Tv',
                "preco" => "400",
                "descricao" => "Uma smart tv com muito mais recursos",
                "categoria" => "tv",
                "galeria" => "https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg"
            ],
            [
                'nome' => 'Soni Tv',
                "preco" => "500",
                "descricao" => "Uma tv com muito mais recursos",
                "categoria" => "tv",
                "galeria" => "https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png"
            ],
            [
                'nome' => 'LG geladeira',
                "preco" => "200",
                "descricao" => "Uma geladeira com muito mais recursos",
                "categoria" => "geladeira",
                "galeria" => "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU"
            ]
        ]);
    }
}
