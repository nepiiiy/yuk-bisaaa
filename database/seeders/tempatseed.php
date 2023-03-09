<?php

namespace Database\Seeders;

use App\Models\addres;
use App\Models\kabupaten;
use App\Models\kecamatan;
use App\Models\provinsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tempatseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        provinsi::create([
            'Provinsi'=>'Jawa Timur',
        ]);
        
        
        kabupaten::create([
            'kabupaten'=>'malang',
        ]);

        kecamatan::create([
            'kecamatan'=>'Karang Ploso',
        ]);

        kecamatan::create([
            'kecamatan'=>'Kepanjen',
        ]);



      

    }
}
