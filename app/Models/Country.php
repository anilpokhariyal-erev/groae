<?php

namespace App\Models;

use App\Models\State;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;

    public function states()
    {
        return $this->hasMany(State::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
