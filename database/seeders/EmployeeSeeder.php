<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        'DB'::table('Employee')->insert([
            'EmployeeID'=> '3001',
            'LastName'=>'Eun',
            'FirstName'=>'Nathania',
            'Title'=>'Manager',
            'TitleofCourtesy'=> 'Ms.',
            'BirthDate'=> '1996-03-14',
            'HireDate'=> '2020-07-15',
            'Address'=>'Wonokromo',
            'City'=>'Surabaya',
            'Region'=>'Jawa Timur',
        ]);

        'DB'::table('Employee')->insert([
            'EmployeeID'=> '3002',
            'LastName'=>'Pranadipa',
            'FirstName'=>'Tasha',
            'Title'=>'Supervisor',
            'TitleofCourtesy'=> 'Mrs.',
            'BirthDate'=> '1986-05-22',
            'HireDate'=> '2013-05-05',
            'Address'=>'Jemur Sari',
            'City'=>'Surabaya',
            'Region'=>'Jawa Timur',
        ]);

        'DB'::table('Employee')->insert([
            'EmployeeID'=>'3003',
            'LastName'=>'Radhana',
            'FirstName'=>'Gazi',
            'Title'=>'Supervisor',
            'TitleofCourtesy'=> 'Mr.',
            'BirthDate'=> '1997-04-12',
            'HireDate'=> '2021-08-23',
            'Address'=>'Darmo',
            'City'=>'Surabaya',
            'Region'=>'Jawa Timur',
        ]);

        'DB'::table('Employee')->insert([
            'EmployeeID'=> '6004',
            'LastName'=>'Katamandara',
            'FirstName'=>'Gilang',
            'Title'=>'Full Time Worker',
            'TitleofCourtesy'=> 'Mr.',
            'BirthDate'=> '1999-01-12',
            'HireDate'=> '2020-10-10',
            'Address'=>'Pagesangan, Jambangan',
            'City'=>'Surabaya',
            'Region'=>'Jawa Timur',
        ]);

        'DB'::table('Employee')->insert([
            'EmployeeID'=> '3005',
            'LastName'=>'Ginandra',
            'FirstName'=>'Qamila',
            'Title'=>'Full Time Worker',
            'TitleofCourtesy'=> 'Ms.',
            'BirthDate'=> '1999-12-22',
            'HireDate'=> '2020-10-10',
            'Address'=>'Sukolilo',
            'City'=>'Surabaya',
            'Region'=>'Jawa Timur',
        ]);
    }
}
