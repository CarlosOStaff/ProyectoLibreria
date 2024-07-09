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
        
        $libro->imagen = 'alienigenas';
        $libro->titulo_libro = $faker->name();
        $libro->descripcion = $faker->sentence(20);
        $libro->contenido = $faker->sentence(50);
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 1;
        $libro->save();
        $libro->etiquetas()->attach([1]); //Relacionar el libro a dos etiquetas


        $libro = new Book();
        $libro->imagen = 'cruce de caminos';
        $libro->titulo_libro = $faker->name();
        $libro->descripcion = $faker->sentence(20);
        $libro->contenido = $faker->sentence(50);
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 2;
        $libro->save();
        $libro->etiquetas()->attach([2]); //Relacionar el libro a dos etiquetas


        $libro = new Book();
        $libro->imagen = 'images (1)';
        $libro->titulo_libro = $faker->name();
        $libro->descripcion = $faker->sentence(20);
        $libro->contenido = $faker->sentence(50);
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 4;
        $libro->save();
        $libro->etiquetas()->attach([3]); //Relacionar el libro a dos etiquetas


        $libro = new Book();
        $libro->imagen = 'images (2)';
        $libro->titulo_libro = $faker->name();
        $libro->descripcion = $faker->sentence(20);
        $libro->contenido = $faker->sentence(50);
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 1;
        $libro->save();
        $libro->etiquetas()->attach([4]); //Relacionar el libro a dos etiquetas


        $libro = new Book();
        $libro->imagen = 'images (3)';
        $libro->titulo_libro = $faker->name();
        $libro->descripcion = $faker->sentence(20);
        $libro->contenido = $faker->sentence(50);
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 6;
        $libro->save();
        $libro->etiquetas()->attach([5]); //Relacionar el libro a dos etiquetas


        $libro = new Book();
        $libro->imagen = 'images (4)';
        $libro->titulo_libro = $faker->name();
        $libro->descripcion = $faker->sentence(20);
        $libro->contenido = $faker->sentence(50);
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 3;
        $libro->save();
        $libro->etiquetas()->attach([6]); //Relacionar el libro a dos etiquetas


        $libro = new Book();
        $libro->imagen = 'images (5)';
        $libro->titulo_libro = $faker->name();
        $libro->descripcion = $faker->sentence(20);
        $libro->contenido = $faker->sentence(50);
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 5;
        $libro->save();
        $libro->etiquetas()->attach([2]); //Relacionar el libro a dos etiquetas

        $libro = new Book();
        $libro->imagen = 'images (6)';
        $libro->titulo_libro = $faker->name();
        $libro->descripcion = $faker->sentence(20);
        $libro->contenido = $faker->sentence(50);
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 4;
        $libro->save();
        $libro->etiquetas()->attach([2]); //Relacionar el libro a dos etiquetas

        $libro = new Book();
        $libro->imagen = 'images';
        $libro->titulo_libro = $faker->name();
        $libro->descripcion = $faker->sentence(20);
        $libro->contenido = $faker->sentence(50);
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 2;
        $libro->save();
        $libro->etiquetas()->attach([2]); //Relacionar el libro a dos etiquetas

        $libro = new Book();
        $libro->imagen = 'it';
        $libro->titulo_libro = $faker->name();
        $libro->descripcion = $faker->sentence(20);
        $libro->contenido = $faker->sentence(50);
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 1;
        $libro->save();
        $libro->etiquetas()->attach([2]); //Relacionar el libro a dos etiquetas

        $libro = new Book();
        $libro->imagen = 'reyes_caidos';
        $libro->titulo_libro = $faker->name();
        $libro->descripcion = $faker->sentence(20);
        $libro->contenido = $faker->sentence(50);
        $libro->fecha_publicacion = $faker->date("Y-m-d");
        $libro->categoria_id = 3;
        $libro->save();
        $libro->etiquetas()->attach([2]); //Relacionar el libro a dos etiquetas

    }
}