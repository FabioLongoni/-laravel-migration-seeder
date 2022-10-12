<?php

use App\TrainSeeder;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'company' => 'RFI',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Napoli',
                'departure_time' => '',
                'arrival_time' => '',
                'train_code' => 'F645L8',
                'train_length' => rand(1,50),
                'in_time' => rand(0,1),
                'deleted' => rand(0,1)
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Firenze',
                'departure_time' => '',
                'arrival_time' => '',
                'train_code' => 'D348L8',
                'train_length' => rand(1,50),
                'in_time' => rand(0,1),
                'deleted' => rand(0,1)
            ],
            [
                'company' => 'Italferr',
                'departure_station' => 'Bologna',
                'arrival_station' => 'Firenze',
                'departure_time' => '',
                'arrival_time' => '',
                'train_code' => 'H685M8',
                'train_length' => rand(1,50),
                'in_time' => rand(0,1),
                'deleted' => rand(0,1)
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Milano Cadorna',
                'arrival_station' => 'Canzo',
                'departure_time' => '',
                'arrival_time' => '',
                'train_code' => 'F645L8',
                'train_length' => rand(1,50),
                'in_time' => rand(0,1),
                'deleted' => rand(0,1)
            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->train_length = $train['train_length'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->deleted = $train['deleted'];

            $newTrain->save();
        }
      
    }
}
