<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PackageBooking extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'customer_id',
        'package_id',
        'original_cost',
        'discount_amount',
        'final_cost',
        'payment_status',
        'status',
        'payment_method',
        'transaction_id',
        'remarks'
    ];

    // Relationships

    /**
     * A PackageBooking belongs to a Customer.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * A PackageBooking belongs to a PackageHeader.
     */
    public function package()
    {
        return $this->belongsTo(PackageHeader::class);
    }

    /**
     * A PackageBooking has many PackageBookingDetails.
     */
    public function bookingDetails()
    {
        return $this->hasMany(PackageBookingDetail::class);
    }

    /**
     * A PackageBooking may have a related Transaction.
     */
    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'package_booking_id');
    }

    // Accessors/Mutators

    /**
     * Get a human-readable label for the payment status.
     */
    public function getPaymentStatusLabelAttribute()
    {
        return $this->payment_status ? 'Completed' : 'Pending';
    }

    /**
     * Get a human-readable label for the status.
     */
    public function getStatusLabelAttribute()
    {
        return $this->status ? 'Active' : 'Inactive';
    }

    /**
     * A PackageBooking has many CustomerDownloads.
     */
    public function downloads()
    {
        return $this->hasMany(CustomerDownload::class, 'package_booking_id');
    }
}
