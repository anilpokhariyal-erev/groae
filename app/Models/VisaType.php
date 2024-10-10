<?php

namespace App\Models;

use App\Models\Freezone;
use App\Models\VisaActivity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VisaType extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['freezone_id', 'name', 'price', 'description'];

    public function visa_activities()
    {
        return $this->belongsToMany(VisaActivity::class);
    }

    public function freezone()
    {
        return $this->belongsTo(Freezone::class);
    }
}
