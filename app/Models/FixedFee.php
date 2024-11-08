<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FixedFee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'label',
        'description',
        'freezone_id',
        'type',
        'value',
        'status'
    ];
    
    protected $casts = [
        'value' => 'decimal:2',
        'status' => 'boolean',
    ];

    public function freezone()
    {
        return $this->belongsTo(Freezone::class);
    }
}
