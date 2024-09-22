<?php

namespace App\Models;

use App\Models\License;
use App\Models\Customer;
use App\Models\Freezone;
use App\Models\Transaction;
use App\Models\FreezoneBookingPackage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FreezoneBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'client_status',
        'office',
        'visa_package',
        'license_validity',
        'activity_group',
        'activity_group_selection',
        'activities',
        'activities_selection',
        'total',
        'license_id',
        'customer_id',
        'freezone_id',
    ];

    public function freezone()
    {
        return $this->belongsTo(Freezone::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function license()
    {
        return $this->belongsTo(License::class);
    }

    public function packages()
    {
        return $this->hasMany(FreezoneBookingPackage::class);
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}
