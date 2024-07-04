<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Faker\Factory as faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();

        $libro = new Book();
        $libro->titulo_libro = $faker->name();
        $libro->descripcion = $faker->sentence(20);
        $libro->contenido = $faker->sentence(50);
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 1;
        $libro->save();
        $libro->etiquetas()->attach([1]); //Relacionar el libro a dos etiquetas


        $libro = new Book();
        $libro->titulo_libro = $faker->name();
        $libro->descripcion = $faker->sentence(20);
        $libro->contenido = $faker->sentence(50);
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 2;
        $libro->save();
        $libro->etiquetas()->attach([2]); //Relacionar el libro a dos etiquetas


        $libro = new Book();
        $libro->titulo_libro = $faker->name();
        $libro->descripcion = $faker->sentence(20);
        $libro->contenido = $faker->sentence(50);
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 4;
        $libro->save();
        $libro->etiquetas()->attach([3]); //Relacionar el libro a dos etiquetas


        $libro = new Book();
        $libro->titulo_libro = $faker->name();
        $libro->descripcion = $faker->sentence(20);
        $libro->contenido = $faker->sentence(50);
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 1;
        $libro->save();
        $libro->etiquetas()->attach([4]); //Relacionar el libro a dos etiquetas


        $libro = new Book();
        $libro->titulo_libro = $faker->name();
        $libro->descripcion = $faker->sentence(20);
        $libro->contenido = $faker->sentence(50);
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 6;
        $libro->save();
        $libro->etiquetas()->attach([5]); //Relacionar el libro a dos etiquetas


        $libro = new Book();
        $libro->titulo_libro = $faker->name();
        $libro->descripcion = $faker->sentence(20);
        $libro->contenido = $faker->sentence(50);
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 3;
        $libro->save();
        $libro->etiquetas()->attach([6]); //Relacionar el libro a dos etiquetas


        $libro = new Book();
        $libro->titulo_libro = $faker->name();
        $libro->descripcion = $faker->sentence(20);
        $libro->contenido = $faker->sentence(50);
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 5;
        $libro->save();
        $libro->etiquetas()->attach([2]); //Relacionar el libro a dos etiquetas


    }
}