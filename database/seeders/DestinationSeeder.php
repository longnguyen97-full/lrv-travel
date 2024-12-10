<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating sample destinations
        Destination::create([
            'name' => 'Paris',
            'description' => 'The city of light and love.',
            'country' => 'France',
        ]);

        Destination::create([
            'name' => 'New York',
            'description' => 'The Big Apple, a bustling metropolis.',
            'country' => 'USA',
        ]);
    }
}
