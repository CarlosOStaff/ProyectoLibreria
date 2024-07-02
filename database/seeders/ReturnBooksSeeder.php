<?php

namespace Database\Seeders;

use App\Models\BookReturn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;


class ReturnBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();

        $devolucion = new BookReturn();
        $devolucion->prestamo_id = 1;
        $devolucion->user_id = 1;
        $devolucion->fecha_devolucion = $faker->date("Y-m-d");
        $devolucion->save();

        $devolucion = new BookReturn();
        $devolucion->prestamo_id = 2;
        $devolucion->user_id = 2;
        $devolucion->fecha_devolucion = $faker->date("Y-m-d");
        $devolucion->save();
    }
}
