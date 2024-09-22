<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActivityGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('activity_groups')->delete();
        
        \DB::table('activity_groups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Advertising',
                'description' => NULL,
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:02:46',
                'updated_at' => '2024-02-15 08:02:46',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Agricultural, Flowers  & Plant',
                'description' => NULL,
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:02:46',
                'updated_at' => '2024-02-15 08:02:46',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Aircraft & Train Trading',
                'description' => NULL,
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:02:46',
                'updated_at' => '2024-02-15 08:02:46',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Amusement Equipment & Supplies Trading',
                'description' => NULL,
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:02:46',
                'updated_at' => '2024-02-15 08:02:46',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Bags, Packaging Material & Paper Trading',
                'description' => NULL,
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:02:46',
                'updated_at' => '2024-02-15 08:02:46',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Building Materials Trading',
                'description' => NULL,
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:02:46',
                'updated_at' => '2024-02-15 08:02:46',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Chemicals Trading',
                'description' => NULL,
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:18:27',
                'updated_at' => '2024-02-15 08:18:27',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Electronics & Electrical Group',
                'description' => NULL,
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:18:27',
                'updated_at' => '2024-02-15 08:18:27',
            ),
        ));
        
        
    }
}