<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShippersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        'DB'::table('Order_detail')->insert([
            'ShippersID'=>'5001',
            'CompanyName'=>'SnR',
            'Phone'=>'082120202020',
        ]);

        'DB'::table('Order_detail')->insert([
            'ShippersID'=>'5002',
            'CompanyName'=>'ForFrom',
            'Phone'=>'085858882545',
        ]);
    }
}
