<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LicensesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('licenses')->delete();
        
        \DB::table('licenses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Trading License',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-03-06 13:34:16',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Industrial License',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-03-06 13:34:21',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Service License',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-03-06 13:34:21',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'General Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-03-06 13:34:21',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Others',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-03-06 13:34:21',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Trading License',
                'description' => NULL,
                'price' => '5000.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-03-07 17:48:19',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Industrial License',
                'description' => NULL,
                'price' => '5000.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-03-07 17:48:24',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Service License',
                'description' => NULL,
                'price' => '5000.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-03-07 17:48:28',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'General Trading',
                'description' => NULL,
                'price' => '15000.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-03-07 17:48:32',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Others',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-03-07 17:48:36',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Trading License',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-03-11 13:14:01',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Industrial License',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-03-11 13:14:01',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Service License',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-03-11 13:14:01',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'General Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-03-11 13:14:01',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Others',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-03-11 13:14:01',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}