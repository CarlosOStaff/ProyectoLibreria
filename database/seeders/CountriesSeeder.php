<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            ['nombre_pais' => 'México'],
            /* ['name' => 'Estados Unidos'],
            ['name' => 'Canadá'],
            ['name' => 'Japón'],
            ['name' => 'China'],
            ['name' => 'Brasil'], */
        ]);
    }
}
