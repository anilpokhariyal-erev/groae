<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Freezone;
class FreezonePage extends Model
{
    use HasFactory;

    protected $fillable = ['freezone_id', 'title','content','file','slug','priority','status'];

    public function freezone(){
        return $this->belongsTo(Freezone::class);
    }
}
