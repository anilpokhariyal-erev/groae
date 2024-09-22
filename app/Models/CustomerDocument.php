<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerDocument extends Model
{
    use HasFactory;

    protected $casts = [
        'format' => 'array',
    ];

    function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
