<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $trains = [
        //     [
        //         'company' => 'Treno per Roma',
        //         'departure_station' => 'Napoli',
        //         'arrival_station' => 'Roma',
        //         'departure_time' => '2024-02-04 19:00:00',
        //         'arrival_time' => '2024-02-04 19:00:00',
        //         'train_code' => 'your_train_code_value',  // Sostituisci con un valore appropriato
        //         'number_of_carriages' => 12,
        //         'on_time' => 1,
        //         'canceled' => 0,
        //     ],
        //     [
        //         'company' => 'Treno per Roma',
        //         'departure_station' => 'Napoli',
        //         'arrival_station' => 'Roma',
        //         'departure_time' => '2024-02-04 19:00:00',
        //         'arrival_time' => '2024-02-04 19:00:00',
        //         'train_code' => 'your_train_code_value',  // Sostituisci con un valore appropriato
        //         'number_of_carriages' => 12,
        //         'on_time' => 1,
        //         'canceled' => 0,
        //     ],      
        // ];

        for ($i=0; $i < 400; $i++) {
            $actualTrain = new Train();

            $actualTrain->company = $faker->unique()->realText(50);
            $actualTrain->departure_station = $faker->unique()->realText(50);
            $actualTrain->arrival_station = $faker->unique()->realText(50);
            $actualTrain->departure_time =  $faker->dateTimeBetween('-1 week', '+1 week');
            $actualTrain->arrival_time =  $faker->dateTimeBetween('-1 week', '+1 week');
            $actualTrain->number_of_carriages = $faker->randomDigit(5);;
            $actualTrain->on_time = $faker->boolean;
            $actualTrain->canceled = $faker->boolean;

            $actualTrain->save();
        }

    }
}
