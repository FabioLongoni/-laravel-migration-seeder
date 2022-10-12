<?php

use App\Train;
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
                'departure_time' => '19:10:00',
                'arrival_time' => '24:00:00',
                'train_code' => 'F645L8',
                'train_length' => rand(1,50),
                'in_time' => rand(0,1),
                'deleted' => rand(0,1)
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Firenze',
                'departure_time' => '10:10:00',
                'arrival_time' => '12:00:00',
                'train_code' => 'D348L8',
                'train_length' => rand(1,50),
                'in_time' => rand(0,1),
                'deleted' => rand(0,1)
            ],
            [
                'company' => 'Italferr',
                'departure_station' => 'Bologna',
                'arrival_station' => 'Firenze',
                'departure_time' => '13:10:00',
                'arrival_time' => '16:00:00',
                'train_code' => 'H685M8',
                'train_length' => rand(1,50),
                'in_time' => rand(0,1),
                'deleted' => rand(0,1)
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Milano Cadorna',
                'arrival_station' => 'Canzo',
                'departure_time' => '14:42:00',
                'arrival_time' => '15:50:00',
                'train_code' => 'F645L8',
                'train_length' => rand(1,50),
                'in_time' => rand(0,1),
                'deleted' => rand(0,1)
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Milano Cadorna',
                'arrival_station' => 'Canzo',
                'departure_time' => '08:42:00',
                'arrival_time' => '09:50:00',
                'train_code' => 'F645L8',
                'train_length' => rand(1,50),
                'in_time' => rand(0,1),
                'deleted' => rand(0,1)
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Milano Cadorna',
                'arrival_station' => 'Canzo',
                'departure_time' => '16:42:00',
                'arrival_time' => '17:50:00',
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
