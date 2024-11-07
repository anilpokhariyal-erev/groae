<?php

namespace App\Models;

use App\Models\State;
use App\Models\Country;
use App\Models\Transaction;
use Illuminate\Support\Str;
use App\Models\FreezoneBooking;
use App\Models\CustomerDocument;
use App\Models\CustomerDownload;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Notifications\CustomerResetPasswordNotification;

class Customer extends Model implements Authenticatable
{

    use SoftDeletes, Notifiable, CanResetPassword, HasFactory;

    protected $fillable = [
        'type',
        'city',
        'email',
        'state_id',
        'country_id',
        'address',
        'pincode',
        'password',
        'last_name',
        'first_name',
        'middle_name',
        'mobile_number',
        'dob',
        'business_interested',
        'dialCode',
        'iso2',
        'status',
    ];

    protected static function booted()
    {
        static::creating(function ($item) {
            $item->uuid = Str::uuid();
            $item->name = trim($item->middle_name) !== '' ? (trim($item->first_name) . ' ' . trim($item->middle_name) . ' ' . trim($item->last_name)) : (trim($item->first_name) . ' ' . trim($item->last_name));
        });

        static::updating(function ($item) {
            $item->name = trim($item->middle_name) !== '' ? (trim($item->first_name) . ' ' . trim($item->middle_name) . ' ' . trim($item->last_name)) : (trim($item->first_name) . ' ' . trim($item->last_name));
        });
    }

    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomerResetPasswordNotification($token, 'customer'));
    }

    public function customer_documents()
    {
        return $this->hasMany(CustomerDocument::class);
    }

    public function customer_downloads()
    {
        return $this->hasMany(CustomerDownload::class);
    }

    public function freezone_bookings()
    {
        return $this->hasMany(FreezoneBooking::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }

}
