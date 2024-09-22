<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VisaActivitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('visa_activities')->delete();
        
        \DB::table('visa_activities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Offer Letter',
                'description' => NULL,
                'price' => '100.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 13:06:04',
                'updated_at' => '2024-02-14 13:06:04',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Transfer of Sponsership fee',
                'description' => NULL,
                'price' => '920.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 13:06:04',
                'updated_at' => '2024-02-14 13:06:04',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Inside Country',
                'description' => NULL,
                'price' => '780.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 13:06:04',
                'updated_at' => '2024-02-14 13:06:04',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Outside Country',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 13:06:04',
                'updated_at' => '2024-02-14 13:06:04',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Partner Visa',
                'description' => NULL,
                'price' => '780.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 13:06:04',
                'updated_at' => '2024-02-14 13:06:04',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Investor Visa',
                'description' => NULL,
                'price' => '780.00',
                'status' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 13:06:04',
                'updated_at' => '2024-02-14 13:06:04',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Offer Letter',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 18:56:33',
                'updated_at' => '2024-02-14 18:56:33',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Transfer of Sponsership fee',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 18:56:33',
                'updated_at' => '2024-02-14 18:56:33',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Inside Country',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 18:56:33',
                'updated_at' => '2024-02-14 18:56:33',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Outside Country',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 18:56:33',
                'updated_at' => '2024-02-14 18:56:33',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Partner Visa',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 18:56:33',
                'updated_at' => '2024-02-14 18:56:33',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Investor Visa',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 18:56:33',
                'updated_at' => '2024-02-14 18:56:33',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Offer Letter',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 22:09:13',
                'updated_at' => '2024-02-14 22:09:13',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Transfer of Sponsership fee',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 22:09:13',
                'updated_at' => '2024-02-14 22:09:13',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Inside Country',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 22:09:13',
                'updated_at' => '2024-02-14 22:09:13',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Outside Country',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 22:09:13',
                'updated_at' => '2024-02-14 22:09:13',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Partner Visa',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 22:09:13',
                'updated_at' => '2024-02-14 22:09:13',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Investor Visa',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 22:09:13',
                'updated_at' => '2024-02-14 22:09:13',
            ),
        ));
        
        
    }
}