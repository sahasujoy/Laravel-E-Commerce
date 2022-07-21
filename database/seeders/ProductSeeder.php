<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        DB::table('products')->insert([
            [
            'name'=>'OPPO Mobile',
            'price'=>'250$',
            'description'=>'A smartphone with 6gb ram and 128gb rom',
            'category'=>'mobile',
            'gallery'=>'https://www.muthophone.com.bd/image/cache/catalog/mobiles/oppo/f-7/oppo-f7-0-600x600.jpeg'
            ],
            [
                'name'=>'LG Mobile',
                'price'=>'150$',
                'description'=>'A smartphone with 4gb ram and 64gb rom',
                'category'=>'mobile',
                'gallery'=>'https://image.made-in-china.com/202f0j00dPaGrVpWYFbI/Original-Unlocked-LG-G7-Single-SIM-6-1-4GB-RAM-64GB-ROM-2-Cameras-Refurbished-Mobile-Phone.jpg'
            ]
        ]);
    }
}
