<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        'DB'::table('Products')->insert([
        'CategoryID'=> '1331',
        'CategoryName'=> 'Bahan Baku',
        'Description'=> 'Bahan baku dasar pokok',
        'picture'=> 'gambar', 
        ]);

        'DB'::table('Products')->insert([
            'CategoryID'=> '1332',
            'CategoryName'=> 'Bahan Bangunan',
            'Description'=> 'Bahan dasar untuk bangunan',
            'picture'=> 'gambar', 
            ]);

         'DB'::table('Products')->insert([
            'CategoryID'=> '1333',
            'CategoryName'=> 'Bahan Pangan',
            'Description'=> 'Bahan pangan yang siap dikonsumsi',
            'picture'=> 'gambar', 
            ]);
    }
}
