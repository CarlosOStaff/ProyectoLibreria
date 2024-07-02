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
        $libro->titulo_libro = $faker->title();
        $libro->descripcion = $faker->text();
        $libro->contenido = $faker->realText();
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 1;
        $libro->save();
        $libro->etiquetas()->attach([1, 2]); //Relacionar el libro a dos etiquetas


        $libro = new Book();
        $libro->titulo_libro = $faker->title();
        $libro->descripcion = $faker->text();
        $libro->contenido = $faker->realText();
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 2;
        $libro->save();
        $libro->etiquetas()->attach([2, 2]); //Relacionar el libro a dos etiquetas


        $libro = new Book();
        $libro->titulo_libro = $faker->title();
        $libro->descripcion = $faker->text();
        $libro->contenido = $faker->realText();
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 4;
        $libro->save();
        $libro->etiquetas()->attach([3, 5]); //Relacionar el libro a dos etiquetas


        $libro = new Book();
        $libro->titulo_libro = $faker->title();
        $libro->descripcion = $faker->text();
        $libro->contenido = $faker->realText();
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 1;
        $libro->save();
        $libro->etiquetas()->attach([4, 7]); //Relacionar el libro a dos etiquetas


        $libro = new Book();
        $libro->titulo_libro = $faker->title();
        $libro->descripcion = $faker->text();
        $libro->contenido = $faker->realText();
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 6;
        $libro->save();
        $libro->etiquetas()->attach([5, 4]); //Relacionar el libro a dos etiquetas


        $libro = new Book();
        $libro->titulo_libro = $faker->title();
        $libro->descripcion = $faker->text();
        $libro->contenido = $faker->realText();
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 3;
        $libro->save();
        $libro->etiquetas()->attach([6, 2]); //Relacionar el libro a dos etiquetas


        $libro = new Book();
        $libro->titulo_libro = $faker->title();
        $libro->descripcion = $faker->text();
        $libro->contenido = $faker->realText();
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 5;
        $libro->save();
        $libro->etiquetas()->attach([7, 2]); //Relacionar el libro a dos etiquetas


    }
}
