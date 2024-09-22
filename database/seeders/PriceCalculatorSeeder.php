<?php

namespace Database\Seeders;

use App\Models\PcVisa;
use App\Models\Freezone;
use App\Models\PcLicense;
use App\Models\PcPackage;
use App\Models\PcVisaAttribute;
use Illuminate\Database\Seeder;
use App\Models\PcPackageAttribute;

class PriceCalculatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $jafza_freezone = Freezone::where('name', 'jafza')->first();

        if($jafza_freezone)
        {
            $pcLicenses = [[
                'name' => 'Trading License (Type 1)',
                'description' => '(7 products max from one group)',
                'price' => '5000',
                'freezone_id' => $jafza_freezone->id
            ],[
                'name' => 'Trading License (Type 2)',
                'description' => '(12 products max from 2 groups)',
                'price' => '8500',
                'freezone_id' => $jafza_freezone->id
            ]];

            foreach ($pcLicenses as $pcLicense) {
                PcLicense::firstOrCreate($pcLicense);
            }

            $pcPackages = [[
                'name' => 'Office',
                'freezone_id' => $jafza_freezone->id
            ],[
                'name' => 'Warehouse & Light Industrial (Unit LIU)',
                'phl_fee' => '4069',
                'freezone_id' => $jafza_freezone->id
            ]];

            foreach ($pcPackages as $pcPackage) {
                PcPackage::firstOrCreate($pcPackage);
            }

            $pcPackageAttrs = [[
                'name' => 'Standard office',
                'price' => '53760',
                'validity' => null,
                'type' => 'selectable',
            ],
            [
                'name' => 'Jafza One',
                'price' => '54000',
                'validity' => null,
                'type' => 'selectable',
            ],[
                'name' => 'Insurance',
                'price' => '100',
                'validity' => '1',
                'type' => 'included',
            ],[
                'name' => 'Name Plate',
                'price' => '500',
                'validity' => null,
                'type' => 'included',
            ]];

            foreach ($pcPackageAttrs as $pcPackageAttr) {
                PcPackageAttribute::firstOrCreate($pcPackageAttr);
            }

            $pcVisas = [[
                'visa_type' => 'Normal Visa',
                'cost' => '2690.25',
                'validity' => 2,
                'freezone_id' => $jafza_freezone->id
            ],[
                'visa_type' => 'VIP Visa',
                'cost' => '4290.25',
                'validity' => 2,
                'freezone_id' => $jafza_freezone->id
            ]];

            foreach ($pcVisas as $pcVisa) {
                PcVisa::firstOrCreate($pcVisa);
            }

            $pcVisaAttrs = [[
                'name' => 'Offer Letter',
                'price' => '100',
            ],[
                'name' => 'Transfer of Sponsership fee',
                'price' => '920',
            ]];

            foreach ($pcVisaAttrs as $pcVisaAttr) {
                PcVisaAttribute::firstOrCreate($pcVisaAttr);
            }

        }

    }
}
