<?php

namespace App\Models;

use App\Models\Freezone;
use App\Models\VisaActivity;
use App\Models\VisaPackageAttributeHeader;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VisaPackageAttribute extends Model
{
    use HasFactory, SoftDeletes;

    // Update the fillable attributes, removing 'name' and adding 'attribute_header_id'
    protected $fillable = ['freezone_id', 'attribute_header_id', 'value', 'price', 'description'];

    /**
     * Define the relationship with VisaActivity
     */
    public function visa_activities()
    {
        return $this->belongsToMany(VisaActivity::class);
    }

    /**
     * Define the relationship with Freezone
     */
    public function freezone()
    {
        return $this->belongsTo(Freezone::class);
    }

    /**
     * Define the relationship with VisaPackageAttributeHeader
     */
    public function attribute_header()
    {
        return $this->belongsTo(VisaPackageAttributeHeader::class, 'attribute_header_id');
    }
}
