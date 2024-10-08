<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('activities')->delete();
        
        \DB::table('activities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Advertising Requisites Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 1,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:21:01',
                'updated_at' => '2024-02-15 08:21:01',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => ' Seeds Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 2,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:21:01',
                'updated_at' => '2024-02-15 08:21:01',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Flowers & Plants Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 2,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:21:01',
                'updated_at' => '2024-02-15 08:21:01',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Plant & Tree Nurseries Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 2,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:21:01',
                'updated_at' => '2024-02-15 08:21:01',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Novelties Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 2,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:21:01',
                'updated_at' => '2024-02-15 08:21:01',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Artificial Flowers & Plants Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 2,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:21:01',
                'updated_at' => '2024-02-15 08:21:01',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Small Aircraft Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 3,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:21:01',
                'updated_at' => '2024-02-15 08:21:01',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Aircraft Spare Parts & Components Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 3,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:21:01',
                'updated_at' => '2024-02-15 08:21:01',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Trains Spare Parts & Components Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 3,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:21:01',
                'updated_at' => '2024-02-15 08:21:01',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Gliders, Sailplanes & Spare Parts Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 3,
                'freezone_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:21:01',
                'updated_at' => '2024-02-15 08:21:01',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Electronic Games & Amusement Center  Equipment  Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 4,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:21:01',
                'updated_at' => '2024-02-15 08:21:01',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Kids Rides & Games Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 4,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:21:01',
                'updated_at' => '2024-02-15 08:21:01',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Paper Products Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 5,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:42:26',
                'updated_at' => '2024-02-15 08:42:26',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Ropes, Sacks Jute Bags Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 5,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:42:26',
                'updated_at' => '2024-02-15 08:42:26',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Paper Trading ',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 5,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:42:26',
                'updated_at' => '2024-02-15 08:42:26',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Packing & Packaging Materials Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 5,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:42:26',
                'updated_at' => '2024-02-15 08:42:26',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Plastic Bags & Containers Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 5,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:42:26',
                'updated_at' => '2024-02-15 08:42:26',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Caps and Lids Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 5,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:42:26',
                'updated_at' => '2024-02-15 08:42:26',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Glass Bottles Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 5,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:42:26',
                'updated_at' => '2024-02-15 08:42:26',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Occupational Hygiene & Safety Requisites Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 6,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:42:26',
                'updated_at' => '2024-02-15 08:42:26',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Basic Steel Products Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 6,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:42:26',
                'updated_at' => '2024-02-15 08:42:26',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Basic Non Ferrous Metal Products Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 6,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:42:26',
                'updated_at' => '2024-02-15 08:42:26',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Scales & Dry Measures Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 6,
                'freezone_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:42:26',
                'updated_at' => '2024-02-15 08:42:26',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Medicinal Chemical  Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 7,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:56:05',
                'updated_at' => '2024-02-15 08:56:05',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Dry Batteries Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 7,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:56:05',
                'updated_at' => '2024-02-15 08:56:05',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Batteries Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 7,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:56:05',
                'updated_at' => '2024-02-15 08:56:05',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Fly Ash Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 7,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:56:05',
                'updated_at' => '2024-02-15 08:56:05',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Detergents & Disinfectants Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 7,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:56:05',
                'updated_at' => '2024-02-15 08:56:05',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Industrial Solvents Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 7,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:56:05',
                'updated_at' => '2024-02-15 08:56:05',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Paint & Varnish Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 7,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:56:05',
                'updated_at' => '2024-02-15 08:56:05',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Industrial Gas Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 7,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:56:05',
                'updated_at' => '2024-02-15 08:56:05',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Computer Electric Accessories Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 8,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:56:05',
                'updated_at' => '2024-02-15 08:56:05',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Blank Cassette Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 8,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:56:05',
                'updated_at' => '2024-02-15 08:56:05',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Computer Software Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 8,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:56:05',
                'updated_at' => '2024-02-15 08:56:05',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Computer & Data Processing Requisites Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 8,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:56:05',
                'updated_at' => '2024-02-15 08:56:05',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Cookers & Cook Stoves Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 8,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:56:05',
                'updated_at' => '2024-02-15 08:56:05',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Audio-visual, Recording Equipment & Accessories Trading',
                'description' => NULL,
                'price' => '0.00',
                'status' => 1,
                'activity_group_id' => 8,
                'freezone_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 08:56:05',
                'updated_at' => '2024-02-15 08:56:05',
            ),
        ));
        
        
    }
}