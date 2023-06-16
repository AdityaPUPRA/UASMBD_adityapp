<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        'DB'::table('Products')->insert([
            'ProductID'=> 'M0001',
            'ProductName'=>'Minyak Goreng',
            'SupplierID'=>'1001',
            'CategoryID'=>'Bahan Baku',
            'QuantityPerUnit'=>'36',
            'UnitPrice'=>'30000',
            'UnitInStock'=>'12',
            'UnitInOrder'=>'1080000',
            'ReorderLevel'=>'72 unit',
            'Discontinued'=>'Terlalu mahal',
        ]);
        
        'DB'::table('Products')->insert([
            'ProductID'=> 'M0001',
            'ProductName'=>'Minyak Goreng',
            'SupplierID'=>'1001',
            'CategoryID'=>'Bahan Baku',
            'QuantityPerUnit'=>'36',
            'UnitPrice'=>'30000',
            'UnitInStock'=>'12',
            'UnitInOrder'=>'1080000',
            'ReorderLevel'=>'72 unit',
            'Discontinued'=>'Terlalu mahal',
         ]);

         'DB'::table('Products')->insert([
            'ProductID'=> 'U0001',
            'ProductName'=>'Keramik Ubin 30x30',
            'SupplierID'=>'1002',
            'CategoryID'=>'Bahan Bangunan',
            'QuantityPerUnit'=>'55',
            'UnitPrice'=>'2000',
            'UnitInStock'=>'11',
            'UnitInOrder'=>'110000',
            'ReorderLevel'=>'660 unit',
            'Discontinued'=>'Digantikan oleh produk baru',
        ]);

        'DB'::table('Products')->insert([
            'ProductID'=> 'U0001',
            'ProductName'=>'Keramik Ubin 30x30',
            'SupplierID'=>'1002',
            'CategoryID'=>'Bahan Bangunan',
            'QuantityPerUnit'=>'55',
            'UnitPrice'=>'2000',
            'UnitInStock'=>'11',
            'UnitInOrder'=>'110000',
            'ReorderLevel'=>'660 unit',
            'Discontinued'=>'Digantikan oleh produk baru',
        ]);

        'DB'::table('Products')->insert([
            'ProductID'=> 'B0001',
            'ProductName'=>'Besi beton',
            'SupplierID'=>'1003',
            'CategoryID'=>'Bahan Bangunan',
            'QuantityPerUnit'=>'50',
            'UnitPrice'=>'42500',
            'UnitInStock'=>'60',
            'UnitInOrder'=>'2125000',
            'ReorderLevel'=>'300 unit',
            'Discontinued'=>'Kualitasnya kurang baik',
        ]);

        'DB'::table('Products')->insert([
            'ProductID'=> 'B0001',
            'ProductName'=>'Besi Beton',
            'SupplierID'=>'1003',
            'CategoryID'=>'Bahan Bangunan',
            'QuantityPerUnit'=>'50',
            'UnitPrice'=>'42500',
            'UnitInStock'=>'60',
            'UnitInOrder'=>'2125000',
            'ReorderLevel'=>'300 unit',
            'Discontinued'=>'Kualitasnya kurang baik',
        ]);

        'DB'::table('Products')->insert([
            'ProductID'=> 'R0001',
            'ProductName'=>'Beras',
            'SupplierID'=>'1004',
            'CategoryID'=>'Bahan Baku',
            'QuantityPerUnit'=>'30',
            'UnitPrice'=>'12000',
            'UnitInStock'=>'30',
            'UnitInOrder'=>'360000',
            'ReorderLevel'=>'180 unit',
            'Discontinued'=>'Penjualan kurang',
        ]);

        'DB'::table('Products')->insert([
            'ProductID'=> 'R0001',
            'ProductName'=>'Beras',
            'SupplierID'=>'1004',
            'CategoryID'=>'Bahan Baku',
            'QuantityPerUnit'=>'30',
            'UnitPrice'=>'12000',
            'UnitInStock'=>'30',
            'UnitInOrder'=>'360000',
            'ReorderLevel'=>'180 unit',
            'Discontinued'=>'Penjualan kurang',
        ]);

        'DB'::table('Products')->insert([
            'ProductID'=> 'S0001',
            'ProductName'=>'Sereal',
            'SupplierID'=>'1005',
            'CategoryID'=>'Bahan Pangan',
            'QuantityPerUnit'=>'100',
            'UnitPrice'=>'20000',
            'UnitInStock'=>'10',
            'UnitInOrder'=>'200000',
            'ReorderLevel'=>'80 unit',
            'Discontinued'=>'Adanya produk baru',
        ]);

        'DB'::table('Products')->insert([
            'ProductID'=> 'S0001',
            'ProductName'=>'Sereal',
            'SupplierID'=>'1005',
            'CategoryID'=>'Bahan Pangan',
            'QuantityPerUnit'=>'100',
            'UnitPrice'=>'20000',
            'UnitInStock'=>'10',
            'UnitInOrder'=>'200000',
            'ReorderLevel'=>'80 unit',
            'Discontinued'=>'Adanya produk baru ',
        ]);
    }
}
