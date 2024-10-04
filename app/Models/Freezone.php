<?php

namespace App\Models;

use App\Models\Offer;
use App\Models\License;
use App\Models\Package;
use App\Models\Activity;
use App\Models\Location;
use App\Models\VisaType;
use App\Models\VisaAddOn;
use Illuminate\Support\Str;
use App\Models\FreezonePage;
use App\Models\VisaActivity;
use App\Models\ActivityGroup;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Freezone extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'logo', 'min_price'];

    protected static function booted()
    {
        static::creating(function ($item) {
            $item->uuid = Str::uuid();
        });
    }

    public function licenses()
    {
        return $this->hasMany(License::class);
    }

    public function packages(): HasMany
    {
        return $this->hasMany(Package::class);
    }

    public function packageheader(): HasMany
    {
        return $this->hasMany(PackageHeader::class);
    }

    public function min_package(): HasOne
    {
        return $this->hasOne(Package::class, 'id', 'min_package_id');
    }

    public function activity_groups()
    {
        return $this->hasMany(ActivityGroup::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function visa_types()
    {
        return $this->hasMany(VisaType::class);
    }

    public function visa_add_ons()
    {
        return $this->hasMany(VisaAddOn::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    public function visa_activities()
    {
        return $this->hasMany(VisaActivity::class);
    }

    public function freezone_pages()
    {
        return $this->hasMany(FreezonePage::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
