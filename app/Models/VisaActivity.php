<?php

namespace App\Models;

use App\Models\Freezone;
use App\Models\VisaType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VisaActivity extends Model
{
    use HasFactory, SoftDeletes;

    protected $hidden = ['pivot'];

    public function visa_types()
    {
        return $this->belongsToMany(VisaType::class);
    }

    public function freezone()
    {
        return $this->belongsTo(Freezone::class);
    }
}
