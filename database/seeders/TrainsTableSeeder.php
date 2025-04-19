<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 20; $i++) {
            $newTrain = new Train();

            $newTrain->azienda = $faker->company();
            $newTrain->stazione_partenza = $faker->citySuffix();
            $newTrain->stazione_destinazione = $faker->citySuffix();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->biasedNumberBetween(1000, 9999, function($x) {
                return sin($x * pi() / 2); 
            });
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->carrozze = $faker->randomDigit();

            $newTrain->save();
        }
    }
}
