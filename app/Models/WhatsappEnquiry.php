<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class WhatsappEnquiry extends Model
{
    use SoftDeletes;

    protected $table = 'whatsapp_enquiries';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'request_data',
        'user_name',
        'user_phone',
        'status',
    ];

    protected $casts = [
        'request_data' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }
}
