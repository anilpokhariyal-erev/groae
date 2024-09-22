<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'iso2',
        'dialCode',
        'mobile_number',
        'type',
        'message',
    ];

    public function contactUsReply()
    {
        return $this->hasMany(ContactUsReply::class);
    }
}
