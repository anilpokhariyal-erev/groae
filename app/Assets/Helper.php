<?php

namespace App\Assets;

use App\Models\Freezone;

abstract class Helper
{
    static function calculateMinPriceByFreezoneID($id)
    {
        $freezone = Freezone::with([
            'packages' => function ($query) {
                return $query->where('status', 1);
            },
        ])->find($id);

        $freezone->min_price = count($freezone->packages) ? $freezone->packages[0]->price : 0;
        $freezone->min_package_id = $freezone->packages[0]->id;
        $freezone->save();

        return;
    }

    // static function calculateMinPriceByFreezoneIDOld($id)
    // {
    //     $freezone = Freezone::with([
    //         'licenses' => function ($query) {
    //             return $query->where('status', 1);
    //         },
    //         'packages' => function ($query) {
    //             return $query->where('status', 1);
    //         },
    //         'visa_types' => function ($query) {
    //             return $query->where('status', 1);
    //         }
    //     ])->find($id);

    //     $min_license = $freezone->licenses->min('price');
    //     $min_package = $freezone->packages->min('price');
    //     $min_visa_type = $freezone->visa_types->min('price');

    //     $freezone->min_price = floatval($min_license) + floatval($min_package) + floatval($min_visa_type);
    //     $freezone->save();

    //     return;
    // }
}
