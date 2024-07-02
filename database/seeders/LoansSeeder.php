<?php

namespace Database\Seeders;

use App\Models\Loan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;


class LoansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();

        $prestamo = new Loan();
        $prestamo->user_id = 1;
        $prestamo->libro_id = 1;
        $prestamo->fecha_prestamo = $faker->date("Y-m-d");
        $prestamo->save();

        $prestamo = new Loan();
        $prestamo->user_id = 2;
        $prestamo->libro_id = 7;
        $prestamo->fecha_prestamo = $faker->date("Y-m-d");
        $prestamo->save();
    }
}
