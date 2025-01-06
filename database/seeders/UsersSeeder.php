<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();
        $user = new User();
        $user->rol_id = 1;
        $user->nombre = $faker->firstName();
        $user->apellido = $faker->lastName();
        $user->email = $faker->email();
        $user->email_verified_at = Carbon::now();
        $user->ciudad_id = 1;
        $user->password = bcrypt(1234);
        $user->save();

        for ($i = 0; $i < 2; $i++) {
            $user = new User();
            $user->rol_id = 2;
            $user->nombre = $faker->firstName();
            $user->apellido = $faker->lastName();
            $user->email = $faker->email();
            $user->ciudad_id = 2;
            $user->password = bcrypt(1234);
            $user->save();
        }
    }
}
