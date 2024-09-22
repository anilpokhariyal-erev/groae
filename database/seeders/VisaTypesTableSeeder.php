<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VisaTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('visa_types')->delete();
        
        \DB::table('visa_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Normal Visa',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-03-06 13:47:05',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Urgent Visa',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-03-06 13:47:05',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Normal Visa',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-03-07 19:59:40',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Urgent Visa',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-03-07 19:59:45',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Normal Visa',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-03-12 19:40:49',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Urgent Visa',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-03-12 19:40:54',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}