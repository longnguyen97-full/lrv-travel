<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating sample bookings
        Booking::create([
            'user_id' => 1, // John Doe
            'accommodation_id' => 1, // Eiffel Tower Hotel
            'check_in_date' => '2024-12-20',
            'check_out_date' => '2024-12-25',
            'total_amount' => 750.00,
            'status' => 'confirmed',
        ]);

        Booking::create([
            'user_id' => 2, // Admin User
            'flight_id' => 1, // Sample flight (if you add flights to the database)
            'flight_date' => '2024-12-15 10:00:00',
            'total_amount' => 500.00,
            'status' => 'pending',
        ]);
    }
}
