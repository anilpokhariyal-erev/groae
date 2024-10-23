<?php

namespace App\Models;

use App\Models\Freezone;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VisaActivity extends Model
{
    use HasFactory, SoftDeletes;

    protected $hidden = ['pivot'];


    public function freezone()
    {
        return $this->belongsTo(Freezone::class);
    }
}
