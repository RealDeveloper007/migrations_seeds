<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon as Carbon;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 5; $i++) {
            // $name = $faker->unique()->word;
            // $quantity = $faker->numberBetween(1, 50);
            // $price = $faker->randomFloat(2,10,200);
            // $value = $price * $quantity;
            User::create([
                'name'              => $faker->unique()->word,
                'email'             => $faker->unique()->word.'@gmail.com',
                'password'          => bcrypt('123456'),
                'email_verified_at' => Carbon::now(),
                'remember_token'    => Carbon::now(),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ]);
        }
    }
}
