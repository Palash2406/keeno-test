<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Category;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $min_category=Category::min('id');
        $max_category=Category::max('id');
        DB::table('products')->insert([
            'title' => 'Wood DiningTable',
            'description' => 'Wood DiningTable description',
            'images_url'=>json_encode(array(
                'img1'=>'https://keeno.app/storage/780/2020_04_08_21_54_5e8df3bf40e3e_upload.png',
                'img2'=>'https://keeno.app/storage/780/2020_04_08_21_54_5e8df3bf40e3e_upload.png'
            )),
            'is_featured'=>true,
            'category_id'=>rand($min_category, $max_category),
            'price'=>rand(1000,10000),
            'rating'=>rand(1,5)
        ]);
        DB::table('products')->insert([
            'title' => 'Office Chair Model CL-02 Black',
            'description' => 'Office Chair Model CL-02 Black description',
            'images_url'=>json_encode(array(
                'img1'=>'https://keeno.app/storage/2006/2020_06_05_14_09_5ed9fdd433fe3_upload.png',
                'img2'=>'https://keeno.app/storage/2006/2020_06_05_14_09_5ed9fdd433fe3_upload.png'
            )),
            'is_featured'=>true,
            'category_id'=>rand($min_category, $max_category),
            'price'=>rand(1000,10000),
            'rating'=>rand(1,5)
        ]);
        DB::table('products')->insert([
            'title' => 'Wood Door',
            'description' => 'Wood Door description',
            'images_url'=>json_encode(array(
                'img1'=>'https://keeno.app/storage/2065/2020_06_11_21_50_5ee252b579b57_upload.png',
                'img2'=>'https://keeno.app/storage/2065/2020_06_11_21_50_5ee252b579b57_upload.png'
            )),
            'is_featured'=>true,
            'category_id'=>rand($min_category, $max_category),
            'price'=>rand(1000,10000),
            'rating'=>rand(1,5)
        ]);
        DB::table('products')->insert([
            'title' => 'Royal Classic Bed',
            'description' => 'Royal Classic Bed description',
            'images_url'=>json_encode(array(
                'img1'=>'https://keeno.app/storage/843/2020_04_11_01_37_5e90cb13b65c6_upload.png',
                'img2'=>'https://keeno.app/storage/843/2020_04_11_01_37_5e90cb13b65c6_upload.png'
            )),
            'is_featured'=>false,
            'category_id'=>rand($min_category, $max_category),
            'price'=>rand(1000,10000),
            'rating'=>rand(1,5)
        ]);

        DB::table('products')->insert([
            'title' => 'Malaysian Wood Processing Bed',
            'description' => 'Malaysian Wood Processing Bed description',
            'images_url'=>json_encode(array(
                'img1'=>'https://keeno.app/storage/1318/2020_04_22_23_36_5ea0809987211_upload.png',
                'img2'=>'https://keeno.app/storage/1318/2020_04_22_23_36_5ea0809987211_upload.png'
            )),
            'is_featured'=>false,
            'category_id'=>rand($min_category, $max_category),
            'price'=>rand(1000,10000),
            'rating'=>rand(1,5)
        ]);
        DB::table('products')->insert([
            'title' => 'NonStick Karai Set',
            'description' => 'NonStick Karai Set description',
            'images_url'=>json_encode(array(
                'img1'=>'https://keeno.app/storage/1064/2020_04_16_21_42_5e987ce09fd6a_upload.png',
                'img2'=>'https://keeno.app/storage/1064/2020_04_16_21_42_5e987ce09fd6a_upload.png'
            )),
            'is_featured'=>true,
            'category_id'=>rand($min_category, $max_category),
            'price'=>rand(1000,10000),
            'rating'=>rand(1,5)
        ]);


        DB::table('products')->insert([
            'title' => 'One-function Manual Treadmill',
            'description' => 'one-function Manual Treadmill description',
            'images_url'=>json_encode(array(
                'img1'=>'https://keeno.app/storage/1206/2020_04_19_22_13_5e9c7893df069_upload.png',
                'img2'=>'https://keeno.app/storage/1206/2020_04_19_22_13_5e9c7893df069_upload.png'
            )),
            'is_featured'=>false,
            'category_id'=>rand($min_category, $max_category),
            'price'=>rand(1000,10000),
            'rating'=>rand(1,5)
        ]);

        DB::table('products')->insert([
            'title' => 'Carrom Board 36',
            'description' => 'Carrom Board 36 description',
            'images_url'=>json_encode(array(
                'img1'=>'https://keeno.app/storage/1980/2020_06_04_23_22_5ed92dd05b1db_upload.png',
                'img2'=>'https://keeno.app/storage/1980/2020_06_04_23_22_5ed92dd05b1db_upload.png'
            )),
            'is_featured'=>false,
            'category_id'=>rand($min_category, $max_category),
            'price'=>rand(1000,10000),
            'rating'=>rand(1,5)
        ]);
        DB::table('products')->insert([
            'title' => 'Apple iPhone 6S 2+64',
            'description' => 'Apple iPhone 6S 2+64 description',
            'images_url'=>json_encode(array(
                'img1'=>'https://keeno.app/storage/2025/2020_06_08_14_32_5eddf7b8b3e52_upload.png',
                'img2'=>'https://keeno.app/storage/2026/2020_06_08_14_33_5eddf7c70b960_upload.png'
            )),
            'is_featured'=>true,
            'category_id'=>rand($min_category, $max_category),
            'price'=>rand(1000,10000),
            'rating'=>rand(1,5)
        ]);



        DB::table('products')->insert([
            'title' => 'Apple iPhone 5S 16 GB',
            'description' => 'Apple iPhone 5S 16 GB description',
            'images_url'=>json_encode(array(
                'img1'=>'https://keeno.app/storage/2025/2020_06_08_14_32_5eddf7b8b3e52_upload.png',
                'img2'=>'https://keeno.app/storage/2026/2020_06_08_14_33_5eddf7c70b960_upload.png'
            )),
            'is_featured'=>true,
            'category_id'=>rand($min_category, $max_category),
            'price'=>rand(1000,10000),
            'rating'=>rand(1,5)
        ]);


        DB::table('products')->insert([
            'title' => 'Microsoft Lumia 950 Dual Sim',
            'description' => 'Microsoft Lumia 950 Dual Sim description',
            'images_url'=>json_encode(array(
                'img1'=>'https://keeno.app/storage/95/2020_02_06_19_11_5e3c1094c4909_upload.png',
                'img2'=>'https://keeno.app/storage/2026/2020_06_08_14_33_5eddf7c70b960_upload.png'
            )),
            'is_featured'=>false,
            'category_id'=>rand($min_category, $max_category),
            'price'=>rand(1000,10000),
            'rating'=>rand(1,5)
        ]);

        DB::table('products')->insert([
            'title' => 'Canon EF-S24mm f/2.8 STM',
            'description' => 'Canon EF-S24mm f/2.8 STM description',
            'images_url'=>json_encode(array(
                'img1'=>'https://keeno.app/storage/124/2020_02_22_01_39_5e5031eb66abf_upload.png',
                'img2'=>'https://keeno.app/storage/126/2020_02_22_01_39_5e5031fe69805_upload.png'
            )),
            'is_featured'=>false,
            'category_id'=>rand($min_category, $max_category),
            'price'=>rand(1000,10000),
            'rating'=>rand(1,5)
        ]);
        DB::table('products')->insert([
            'title' => 'Apple iPhone 6S 2+64',
            'description' => 'Apple iPhone 6S 2+64 description',
            'images_url'=>json_encode(array(
                'img1'=>'https://keeno.app/storage/2018/2020_06_07_12_16_5edc86316f52c_upload.png',
                'img2'=>'https://keeno.app/storage/2020/2020_06_07_12_16_5edc86537c79d_upload.png'
            )),
            'is_featured'=>true,
            'category_id'=>rand($min_category, $max_category),
            'price'=>rand(1000,10000),
            'rating'=>rand(1,5)
        ]);
    }
}
