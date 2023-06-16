<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        'DB'::table('Suppliers')->insert([
            'SupplierID'=> '1001',
            'CompanyName'=> 'PT.Hadi',
            'ContactName'=> 'Joshua',
            'Address'=>'Perum. Pakuwon City',
            'City'=> 'Surabaya',
            'Region'=> 'Jawa Timur',
            'PostalCode'=> '60112' 
        ]);

        'DB'::table('Suppliers')->insert([
            'SupplierID'=> '1002',
            'CompanyName'=> 'PT.Insan Permata Hati',
            'ContactName'=> 'Vernon',
            'Address'=>'Perum. Pakuwon Indah, The Mansion',
            'City'=> 'Surabaya',
            'Region'=> 'Jawa Timur',
            'PostalCode'=> '60112' 
        ]);
        
        'DB'::table('Suppliers')->insert([
            'SupplierID'=> '1003',
            'CompanyName'=> 'PT.Mandara',
            'ContactName'=> 'Daniel',
            'Address'=>'Jln. Karang Asem IV',
            'City'=> 'Surabaya',
            'Region'=> 'Jawa Timur',
            'PostalCode'=> '60133' 
        ]);
        
        'DB'::table('Suppliers')->insert([
            'SupplierID'=> '1004',
            'CompanyName'=> 'PT. Maharaja',
            'ContactName'=> 'Hanggara',
            'Address'=>'Jln. Wijaya Kusuma FD/17',
            'City'=> 'Sidoarjo',
            'Region'=> 'Jawa Timur',
            'PostalCode'=> '61253' 
        ]);

        'DB'::table('Suppliers')->insert([
            'SupplierID'=> '1005',
            'CompanyName'=> 'PT.Senyum Manis',
            'ContactName'=> 'Jun',
            'Address'=>'Perum. Citraland Utara',
            'City'=> 'Surabaya',
            'Region'=> 'Jawa Timur',
            'PostalCode'=> '60211' 
        ]);
    }
}
