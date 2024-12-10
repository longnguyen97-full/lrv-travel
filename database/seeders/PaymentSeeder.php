<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating sample payments
        Payment::create([
            'booking_id' => 1, // John Doe's booking
            'payment_method' => 'Credit Card',
            'amount' => 750.00,
            'status' => 'completed',
        ]);

        Payment::create([
            'booking_id' => 2, // Admin User's booking
            'payment_method' => 'PayPal',
            'amount' => 500.00,
            'status' => 'pending',
        ]);
    }
}
