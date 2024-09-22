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
        'message'
    ];

    public function freezone()
    {
        return $this->belongsTo(Freezone::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    function freezone_booked()
    {
        return $this->belongsTo(FreezoneBooking::class);
    }
}
