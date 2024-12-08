<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'flight_number',
        'departure_city',
        'arrival_city',
        'departure_time',
        'arrival_time',
        'price',
    ];

    /**
     * Get all bookings associated with this flight.
     * This function defines the one-to-many relationship between the Flight model and the Booking model.
     * A flight can have multiple bookings.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
