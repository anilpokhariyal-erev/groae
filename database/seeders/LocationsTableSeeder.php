<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('locations')->delete();
        
        \DB::table('locations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Inside UAE',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-03-06 13:59:12',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Outside UAE',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-03-06 13:59:19',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Inside UAE',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-03-07 20:02:25',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Outside UAE',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-03-07 20:02:30',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Inside UAE',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-03-12 19:46:42',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Outside UAE',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-03-12 19:46:48',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}