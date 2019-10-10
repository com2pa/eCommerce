<!-- datos de pruebas -->
<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Product;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
               'name'            => 'playera 1',
               'slug'            =>'playera 2',
               'description'     =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
               'extract'         =>'Lorem ipsum dolor',
               'prince'          => 24,
               'image'           =>'https://static.wixstatic.com/media/b5e4eb_e75dfc41d4364ebca6fe6876f90321c3~mv2.jpg/v1/fill/w_600,h_790,al_c,q_85/b5e4eb_e75dfc41d4364ebca6fe6876f90321c3~mv2.jpg',
               'visible'         => 1,
            //    'created_at'      => new Datetime,
            //    'updated_at'      => new Datatime,
               'categories_id'     => 1,
            ],
            [
                'name'            => 'player 2',
                'slug'            =>'player 2',
                'description'     =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'extract'         =>'Lorem ipsum dolor',
                'prince'          => 334,
                'image'           =>'https://http2.mlstatic.com/playeras-yazbek-cuello-v-dama-o-caballero-7-colores-disp-D_NQ_NP_803838-MLM31229756282_062019-Q.jpg',
                'visible'         => 1,
                // 'created_at'      => new Datetime,
                // 'updated_at'      => new Datatime,
                'categories_id'     => 2,
             ],
             [
                'name'            => 'play 3',
                'slug'            =>'play 3',
                'description'     =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'extract'         =>'Lorem ipsum dolor',
                'prince'          => 21,
                'image'           =>'https://static.wixstatic.com/media/b5e4eb_e75dfc41d4364ebca6fe6876f90321c3~mv2.jpg/v1/fill/w_600,h_790,al_c,q_85/b5e4eb_e75dfc41d4364ebca6fe6876f90321c3~mv2.jpg',
                'visible'         => 1,
                // 'created_at'      => new Datetime,
                // 'updated_at'      => new Datatime,
                'categories_id'     => 3,
             ],

        );
    Product::insert($data);
    }
}
