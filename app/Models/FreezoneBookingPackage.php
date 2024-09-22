<?php

namespace App\Models;

use App\Models\FreezoneBooking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FreezoneBookingPackage extends Model
{
    use HasFactory;

    public function freezone_booking()
    {
        return $this->belongsTo(FreezoneBooking::class);
    }
}
