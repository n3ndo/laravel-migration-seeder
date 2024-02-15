<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Modifica il numero di righe desiderato
        $numberOfRows = 20;

        for ($i = 0; $i < $numberOfRows; $i++) {
            DB::table('trains')->insert([
                'company' => $faker->company,
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_time' => $faker->time('H:i:s'),
                'arrival_time' => $faker->time('H:i:s'),
                'train_code' => $faker->unique()->bothify('??###??'),
                'carriages' => $faker->numberBetween(1, 5),
                'is_on_time' => $faker->boolean,
                'is_deleted' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}