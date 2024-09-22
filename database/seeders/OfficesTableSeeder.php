<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('offices')->delete();
        
        \DB::table('offices')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Standard Office',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 06:57:10',
                'updated_at' => '2024-02-14 06:57:26',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Warehouse',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 06:57:15',
                'updated_at' => '2024-02-14 06:57:29',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Others',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 06:57:19',
                'updated_at' => '2024-02-14 06:57:33',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Flexidesk',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 08:16:16',
                'updated_at' => '2024-02-14 08:16:16',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'No Office',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 13:35:13',
                'updated_at' => '2024-02-14 13:35:13',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Serviced Office',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 13:35:13',
                'updated_at' => '2024-02-14 13:35:13',
            ),
        ));
        
        
    }
}