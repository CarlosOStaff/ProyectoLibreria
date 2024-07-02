<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{

    public function run(): void
    {
        DB::table("categories")->insert([
            ['nombre_categoria' => 'Terror'],
            ['nombre_categoria' => 'Comedi'],
            ['nombre_categoria' => 'Romance'],
            ['nombre_categoria'=> 'Acción'],
            ['nombre_categoria'=> 'Ciencia Ficción'],
            ['nombre_categoria'=> 'Suspenso'],
        ]);
    }
}
