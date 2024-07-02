<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesSeeder::class);
        $this->call(CountriesSeeder::class);
        $this->call(StatesSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(BooksSeeder::class);
        $this->call(LoansSeeder::class);
        $this->call(ReturnBooksSeeder::class);
    }
}
