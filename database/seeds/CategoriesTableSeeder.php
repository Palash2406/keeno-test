<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Furniture',
            'image_url' => 'https://i.pinimg.com/564x/27/3d/f1/273df14f1760b2006ed90c5064ee1041.jpg',
        ]);
        DB::table('categories')->insert([
            'name' => 'Home Appliances',
            'image_url' => 'https://www.gadgetreview.com/wp-content/uploads/2014/08/kitchen-appliance-reviews.jpg',
        ]);
        DB::table('categories')->insert([
            'name' => 'Electronics & Gadgets',
            'image_url' => 'https://marketechforum.com/wp-content/uploads/2019/03/Electronics-and-Gadgets.jpg',
        ]);
        DB::table('categories')->insert([
            'name' => 'Sports & Hobbies',
            'image_url' => 'https://www.brisbanekids.com.au/wp-content/uploads/2016/11/bigstock-124054388.jpg',
        ]);
        DB::table('categories')->insert([
            'name' => 'Phone & Tablets',
            'image_url' => 'https://www.naijatechguide.com/wp-content/uploads/2018/07/Jumia-Flex-iPhone-X.jpg',
        ]);

    }
}
