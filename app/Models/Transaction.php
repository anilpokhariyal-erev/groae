<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\Freezone;
use App\Models\FreezoneBooking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'amount',
        'customer_id',
        'payment_status',
        'message',
        'freezone_booking_id',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function freezone_booked()
    {
        return $this->belongsTo(FreezoneBooking::class, 'freezone_booking_id'); // Specify the foreign key if it's not 'freezone_booking_id'
    }
}

