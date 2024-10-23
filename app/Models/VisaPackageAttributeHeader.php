<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VisaPackageAttributeHeader extends Model
{
    use HasFactory, SoftDeletes;

    // The table associated with the model
    protected $table = 'visa_package_attribute_header';

    // The attributes that are mass assignable
    protected $fillable = [
        'name',
        'title',
        'status',
    ];

    // Optionally, you can define the default values for attributes
    protected $attributes = [
        'status' => 1, // default status as active
    ];
}
