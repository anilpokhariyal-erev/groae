<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreezoneDefaultAttribute extends Model
{
    use HasFactory;

    protected $table = 'freezone_default_attributes';

    // Specify which fields can be mass assigned
    protected $fillable = [
        'freezone_id',
        'attribute_id',
        'attribute_option_id',
        'allowed_free_qty',
        'unit_price',
        'per_unit',
    ];

    // Relationships

    public function freezone()
    {
        return $this->belongsTo(Freezone::class, 'freezone_id');
    }

    public function attribute()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id');
    }

    public function attributeOption()
    {
        return $this->belongsTo(AttributeOption::class, 'attribute_option_id');
    }
}
