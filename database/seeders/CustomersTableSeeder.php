<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('customers')->delete();

        \DB::table('customers')->insert(array(
            0 =>
            array(
                'id' => 1,
                'uuid' => '77bb9608-0793-4df8-a5a7-6dd0924006e0',
                'name' => 'Shouvik Mohanta',
                'email' => 'shouvik@yopmail.com',
                'address' => 'dummy address',
                'city' => 'delhi',
                'state_id' => NULL,
                'country_id' => NULL,
                'pincode' => '521622',
                'uae_residence' => 0,
                'mobile_number' => '555555555',
                'proof_document' => NULL,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-20 04:59:26',
                'updated_at' => '2024-02-20 04:59:26',
                'first_name' => 'Shouvik',
                'middle_name' => NULL,
                'last_name' => 'Mohanta',
                'type' => 'customer',
                'email_verified_at' => NULL,
                'password' => Hash::make('Affle@123'),
                'iso2' => 'ae',
                'dialCode' => 971,
                'dob' => NULL,
                'business_interested' => NULL,
            ),
            1 =>
            array(
                'id' => 2,
                'uuid' => 'e97b492e-6413-4c90-80b1-f46eee5c7603',
                'name' => 'Brij Kishore',
                'email' => 'brij@yopmail.com',
                'address' => 'dummy address',
                'city' => 'delhi',
                'state_id' => NULL,
                'country_id' => NULL,
                'pincode' => '521622',
                'uae_residence' => 0,
                'mobile_number' => '555555556',
                'proof_document' => NULL,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-20 04:59:26',
                'updated_at' => '2024-02-20 04:59:26',
                'first_name' => 'Brij',
                'middle_name' => NULL,
                'last_name' => 'Kishore',
                'type' => 'customer',
                'email_verified_at' => NULL,
                'password' => Hash::make('Affle@123'),
                'iso2' => 'ae',
                'dialCode' => 971,
                'dob' => NULL,
                'business_interested' => NULL,
            ),
            2 =>
            array(
                'id' => 3,
                'uuid' => 'b3f34b12-bca6-4163-a05f-20d5197aab2d',
                'name' => 'Sakshi Mishra',
                'email' => 'sakshi@yopmail.com',
                'address' => 'dummy address',
                'city' => 'delhi',
                'state_id' => NULL,
                'country_id' => NULL,
                'pincode' => '521622',
                'uae_residence' => 0,
                'mobile_number' => '555555557',
                'proof_document' => NULL,
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-20 04:59:26',
                'updated_at' => '2024-02-20 04:59:26',
                'first_name' => 'Sakshi',
                'middle_name' => NULL,
                'last_name' => 'Mishra',
                'type' => 'customer',
                'email_verified_at' => NULL,
                'password' => Hash::make('Affle@123'),
                'iso2' => 'ae',
                'dialCode' => 971,
                'dob' => NULL,
                'business_interested' => NULL,
            ),
        ));
    }
}
