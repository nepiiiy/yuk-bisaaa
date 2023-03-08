<?php

namespace Database\Seeders;

use App\Models\addres;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tempatseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        addres::create([
            'kecamatan'=>'Karang Ploso',
            'kecamatan'=>'Kepanjen',
            'kabupaten'=>'Malang',
            'Provinsi'=>'Jawa Timur',
        ]);
        

        addres::create([
            'kecamatan'=>'Karang Ploso',
        ]);

        addres::create([
            'kecamatan'=>'Pagak',
        ]);


        addres::create([
            'kabupaten'=>'trenggalek',
            'kecamatan'=>'ngantang',
        ]);

    }
}
