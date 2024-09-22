<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDownload extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'size',
        'value',
        'customer_id',
        'status'
    ];

    function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
