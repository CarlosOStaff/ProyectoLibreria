<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();

        for ($i = 0; $i < 10; $i++) {
            $tags = new Tag();
            $tags->nombre_etiqueta = $faker->company();
            $tags->save();
        }

    }
}
