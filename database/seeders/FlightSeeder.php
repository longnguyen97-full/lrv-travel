<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Flight;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating sample flights
        Flight::create([
            'flight_number' => 'AF123',
            'departure_city' => 'Paris',
            'arrival_city' => 'New York',
            'departure_time' => '2024-12-15 08:00:00',
            'arrival_time' => '2024-12-15 10:00:00',
            'price' => 500.00,
        ]);

        Flight::create([
            'flight_number' => 'NY456',
            'departure_city' => 'New York',
            'arrival_city' => 'Paris',
            'departure_time' => '2024-12-30 08:00:00',
            'arrival_time' => '2024-12-30 10:00:00',
            'price' => 550.00,
        ]);
    }
}
