<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VisaAddOnsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('visa_add_ons')->delete();
        
        \DB::table('visa_add_ons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Partner Visa',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-03-06 13:56:27',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Investor Visa',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-03-06 13:56:32',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Partner Visa',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-03-07 20:00:31',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Investor Visa',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-03-07 20:00:37',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Partner Visa',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-03-12 19:43:40',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Investor Visa',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-03-12 19:43:46',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}