<!-- datos de pruebas -->
<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
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
                'name' => 'Super heroes',
                'slug' => 'Super heroes',
                'description' => 'Lorem ipsum dolor sit amet consecte',
                'color'=> '#fff',
            ],
            [
                'name' => 'animales',
                'slug' => 'Animales',
                'description' => 'Lorem ipsum dolor sit amet consecte',
                'color'=> '#000',
            ],
            [
                'name' => 'plantas',
                'slug' => 'plantas',
                'description' => 'Lorem ipsum dolor sit amet consecte',
                'color'=> '#efefef',
            ],
        );
    Category::insert($data);
    }
}
