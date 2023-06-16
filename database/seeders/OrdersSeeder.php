<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        'DB'::table('Orders')->insert([
            'OrderID'=>'4001',
            'CustomerID'=>'2001',
            'EmployeeID'=> '3001',
            'OrderDate'=>'2023-06-12',
            'RequiredDate'=>'2023-06-14',
            'ShippedDate'=>'2023-06-13',
            'ShipVia'=>'Truk Box',
            'Freight'=>'22000',
            'ShippedName'=>'Joko Anwar',
            'ShippedAddress'=>'Ketintang Gg. IV',
            'ShipCity'=>'Surabaya',
            'ShipRegion'=>'Jawa Timur',
            'ShipPostalCode'=>'60243',
            'ShipCountry'=>'Indonesia',
        ]);
        
        'DB'::table('Orders')->insert([
            'OrderID'=>'4002',
            'CustomerID'=>'2002',
            'EmployeeID'=> '3002',
            'OrderDate'=>'2023-06-01',
            'RequiredDate'=>'2023-06-03',
            'ShippedDate'=>'2023-06-02',
            'ShipVia'=>'Truk Pick Up',
            'Freight'=>'25000',
            'ShippedName'=>'Asep Mandraguna',
            'ShippedAddress'=>'Wedoro, Waru',
            'ShipCity'=>'Sidoarjo',
            'ShipRegion'=>'Jawa Timur',
            'ShipPostalCode'=>'61256',
            'ShipCountry'=>'Indonesia',
        ]);

        'DB'::table('Orders')->insert([
            'OrderID'=>'4003',
            'CustomerID'=>'2005',
            'EmployeeID'=> '3003',
            'OrderDate'=>'2023-06-05',
            'RequiredDate'=>'2023-06-08',
            'ShippedDate'=>'2023-06-07',
            'ShipVia'=>'Truck Pick Up',
            'Freight'=>'27000',
            'ShippedName'=>'Surya Beringin',
            'ShippedAddress'=>'Pacar Kembang Gg. 5',
            'ShipCity'=>'Surabaya',
            'ShipRegion'=>'Jawa Timur',
            'ShipPostalCode'=>'60132',
            'ShipCountry'=>'Indonesia',
        ]);

        'DB'::table('Orders')->insert([
            'OrderID'=>'4004',
            'CustomerID'=>'2004',
            'EmployeeID'=> '3004',
            'OrderDate'=>'2023-06-06',
            'RequiredDate'=>'2023-06-09',
            'ShippedDate'=>'2023-06-07',
            'ShipVia'=>'Truck Box',
            'Freight'=>'20000',
            'ShippedName'=>'Benjamin',
            'ShippedAddress'=>'Lidah Wetan Gg 5',
            'ShipCity'=>'Surabaya',
            'ShipRegion'=>'Jawa Timur',
            'ShipPostalCode'=>'60213',
            'ShipCountry'=>'Indonesia',
        ]);

        'DB'::table('Orders')->insert([
            'OrderID'=>'4005',
            'CustomerID'=>'2003',
            'EmployeeID'=> '3005',
            'OrderDate'=>'2023-06-05',
            'RequiredDate'=>'2023-06-07',
            'ShippedDate'=>'2023-06-06',
            'ShipVia'=>'Truk Box',
            'Freight'=>'20000',
            'ShippedName'=>'Jono Sapardi',
            'ShippedAddress'=>'Rungkut Menanggal',
            'ShipCity'=>'Surabaya',
            'ShipRegion'=>'Jawa Timur',
            'ShipPostalCode'=>'60293',
            'ShipCountry'=>'Indonesia',
        ]);
    }
}
