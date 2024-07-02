<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('states')->insert([

            [
                'nombre_estado' => 'Aguascalientes',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Baja California',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Baja California Sur',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Campeche',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Chiapas',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Chihuahua',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Ciudad de México',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Coahuila',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Colima',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Durango',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Estado de México ',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Guanajuato ',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Guerrero ',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Hidalgo ',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Jalisco ',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Michoacán',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Morelos ',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Nayarit ',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Nuevo León',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Oaxaca',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Puebla',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Querétaro',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Quintana Roo',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'San Luis Potosí',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Sinaloa',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Sonora',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Tabasco',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Tamaulipas',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Tlaxcala',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Veracruz',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Yucatán',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Zacatecas',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Alabama',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Alaska',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Arizona',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'Arkansas',
                'pais_id' => 1,
            ],
            [
                'nombre_estado' => 'California',
                'pais_id' => 1,
            ],

        ]);
    }
}
