<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'check_in_date',
        'check_out_date',
        'flight_date',
        'total_amount',
        'status',
    ];

    /**
     * Get the user who made the booking.
     * This function defines the inverse of the one-to-many relationship between the Booking model and the User model.
     * Each booking belongs to one user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the accommodation associated with the booking.
     * This function defines the inverse of the one-to-many relationship between the Booking model and the Accommodation model.
     * A booking can optionally belong to an accommodation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function accommodation()
    {
        return $this->belongsTo(Accommodation::class);
    }

    /**
     * Get the flight associated with the booking.
     * This function defines the inverse of the one-to-many relationship between the Booking model and the Flight model.
     * A booking can optionally belong to a flight.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
