<?php

namespace App\Models;

use App\Models\Customer;
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
        'package_booking_id',
        'response_obj',
    ];

    /**
     * Define a relationship with the Customer model.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Define a relationship with the PackageBooking model
     */
    public function packageBooking()
    {
        return $this->belongsTo(PackageBooking::class);
    }
}
