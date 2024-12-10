<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Accommodation;

class AccommodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating sample accommodations
        Accommodation::create([
            'destination_id' => 1, // Paris
            'name' => 'Eiffel Tower Hotel',
            'description' => 'A luxurious hotel with a view of the Eiffel Tower.',
            'capacity' => 50,
            'price_per_night' => 150.00,
        ]);

        Accommodation::create([
            'destination_id' => 2, // New York
            'name' => 'Times Square Inn',
            'description' => 'Stay close to the famous Times Square.',
            'capacity' => 30,
            'price_per_night' => 200.00,
        ]);
    }
}
