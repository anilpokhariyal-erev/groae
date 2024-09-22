<?php

namespace App\Models;

use App\Models\User;
use App\Models\ContactUs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactUsReply extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_us_id',
        'receiver_id',
        'sender_id',
        'to_email',
        'message',
    ];

    public function contactUs()
    {
        return $this->belongsTo(ContactUs::class);
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
}
