<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PcActivity;
class PcActivity extends Model
{
    use HasFactory;
    public function child_activity(){
        return $this->hasMany(PcActivity::class,'parent_id');
    }
    public function parent_activity(){
        return $this->belongsTo(PcActivity::class,'parent_id');
    }
}
