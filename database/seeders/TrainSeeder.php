<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
            "company" =>'Treno per Roma',
            "departure_station"=> 'Napoli',
            "arrival_station" =>'Roma',
            "departure_time" =>18,
            "arrival_time" =>19,
            "train_code" =>'LKNR1819',
            "number_of_carriages" =>12,
            "on_time" =>true,
            "canceled" =>false,
            ],
            [
                "company" =>'Treno per Vicenza',
                "departure_station"=> 'Bologna',
                "arrival_station" =>'Vicenza',
                "departure_time" =>10,
                "arrival_time" =>11,
                "train_code" =>'LKNR1819',
                "number_of_carriages" =>30,
                "on_time" =>false,
                "canceled" =>false,
            ],
            [
                "company" =>'Treno per Roma',
                "departure_station"=> 'Napoli',
                "arrival_station" =>'Roma',
                "departure_time" =>18,
                "arrival_time" =>19,
                "train_code" =>'LKNR1819',
                "number_of_carriages" =>12,
                "on_time" =>true,
                "canceled" =>false,
            ],
            [
                "company" =>'Treno per Roma',
                "departure_station"=> 'Napoli',
                "arrival_station" =>'Roma',
                "departure_time" =>18,
                "arrival_time" =>19,
                "train_code" =>'LKNR1819',
                "number_of_carriages" =>12,
                "on_time" =>true,
                "canceled" =>false,
            ],
            [
                "company" =>'Treno per Roma',
                "departure_station"=> 'Napoli',
                "arrival_station" =>'Roma',
                "departure_time" =>18,
                "arrival_time" =>19,
                "train_code" =>'LKNR1819',
                "number_of_carriages" =>12,
                "on_time" =>true,
                "canceled" =>false,
            ],            
        ];
    }
}
