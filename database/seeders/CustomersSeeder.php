<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        'DB'::table('Customers')->insert([
            'CustomerID'=>'2001',
            'CompanyName'=>'Toko Ajaib ',
            'ContactTitle'=>'Pak Namu',
            'Address'=>'Ketintang Gg IV',
            'City'=>'Surabaya',
            'Region'=>'Jawa Timur',
            'PostalCode'=>'60243',
            ]);
        
        'DB'::table('Customers')->insert([
            'CustomerID'=>'2002',
            'CompanyName'=>'Toko Bahan Bangunan Cerah',
            'ContactTitle'=>'Pak Jin',
            'Address'=>'Wedoro, Waru',
            'City'=>'Sidoarjo',
            'Region'=>'Jawa Timur',
            'PostalCode'=>'61256',
            ]);
        
         'DB'::table('Customers')->insert([
            'CustomerID'=>'2003',
            'CompanyName'=>'Merdeka Maret',
            'ContactTitle'=>'Pak Hope',
            'Address'=>'Rungkut Menanggal',
            'City'=>'Surabaya',
            'Region'=>'Jawa Timur',
            'PostalCode'=>'60293',
            ]);

         'DB'::table('Customers')->insert([
            'CustomerID'=>'2004',
            'CompanyName'=>'Toko Carat',
            'ContactTitle'=>'Pak Cheol',
            'Address'=>'Lidah Wetan Gg 5',
            'City'=>'Surabaya',
            'Region'=>'Jawa Timur',
            'PostalCode'=>'60213',
            ]);

         'DB'::table('Customers')->insert([
            'CustomerID'=>'2005',
            'CompanyName'=>'Toko Bahan Bangunan Setia',
            'ContactTitle'=>'Pak Wilbert',
            'Address'=>'Pacar Kembang Gg 5',
            'City'=>'Surabaya',
            'Region'=>'Jawa Timur',
            'PostalCode'=>'60132',
            ]);
    }
}
