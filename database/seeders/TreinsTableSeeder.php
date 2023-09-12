<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//models
use App\Models\Train;
use Termwind\Components\Hr;

class TreinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Train::truncate();
        for ($i=0; $i < 12; $i++) { 

            $train = new Train();
            $train->agency = fake()->word(3, true);
            $train->departure_station = fake()->city() ;
            $train->arrival_station = fake()->city() ;
            $train->departure_time = fake()->dateTimeThisMonth();
            $train->arrival_time = fake()->dateTimeThisMonth();
            $train->price = fake()->randomFloat(2,1, 999);
            $train->train_code = fake()->randomNumber(5, false);
            $train->carriages_number = fake()->randomNumber(3, false);
            $train->in_time = fake()->numberBetween(0, 1);
            $train->cancelled = fake()->numberBetween(0, 1);
            $train->save();
        }
    }
}
