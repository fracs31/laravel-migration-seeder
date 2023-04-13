<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker; //faker
use App\Models\Train; //model "Train"

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //Ciclo
        for ($i = 0; $i < 100; $i++) {
            $newTrain = new Train(); //crezione di un nuovo treno
            $newTrain->company = $faker->name(); //azienda
            $newTrain->start_station = $faker->name(); //stazione di partenza
            $newTrain->last_station = $faker->name(); //stazione di arrivo
            $newTrain->start_time = $faker->date() . " " . $faker->time(); //orario di partenza
            $newTrain->arrive_time = $faker->date() . " " . $faker->time(); //orario di arrivo
            $newTrain->train_code = $faker->numerify('TR-###'); //codice del treno
            $newTrain->in_time = $faker->numberBetween(0, 1); //in orario
            $newTrain->cancelled = $faker->numberBetween(0, 1); //cancellato
            $newTrain->save(); //inserisco i dati nel database
        }
    }
}
