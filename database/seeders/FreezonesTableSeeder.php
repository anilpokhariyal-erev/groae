<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FreezonesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('freezones')->delete();

        \DB::table('freezones')->insert(array(
            0 =>
            array(
                'about' => NULL,
                'benefits' => NULL,
                'business_registration_image' => NULL,
                'business_registration_youtube_link' => NULL,
                'created_at' => '2024-02-14 08:05:17',
                'deleted_at' => NULL,
                'freezone_views_count' => 6,
                'id' => 1,
                'licence_registration_procedures_info' => NULL,
                'licence_registration_procedures_logo' => NULL,
                'licence_registration_procedures_video_link' => NULL,
                'logo' => 'freezones/1710855901.png',
                'min_package_id' => 21,
                'min_price' => '20000.00',
                'name' => 'Jafza',
                'price_calculator_comment' => NULL,
                'registration_information' => NULL,
                'rule_regulation_info' => NULL,
                'rule_regulation_logo' => NULL,
                'rule_regulation_type' => NULL,
                'slug' => 'jafza',
                'status' => 1,
                'updated_at' => '2024-03-19 14:48:40',
                'uuid' => 'e97b492e-6413-4c90-80b1-f46eee5c7603',
            ),
            1 =>
            array(
                'about' => NULL,
                'benefits' => NULL,
                'business_registration_image' => NULL,
                'business_registration_youtube_link' => NULL,
                'created_at' => '2024-02-14 08:07:03',
                'deleted_at' => NULL,
                'freezone_views_count' => 0,
                'id' => 2,
                'licence_registration_procedures_info' => NULL,
                'licence_registration_procedures_logo' => NULL,
                'licence_registration_procedures_video_link' => NULL,
                'logo' => 'freezones/1710855686.png',
                'min_package_id' => 1,
                'min_price' => '12900.00',
                'name' => 'Ifza',
                'price_calculator_comment' => NULL,
                'registration_information' => NULL,
                'rule_regulation_info' => NULL,
                'rule_regulation_logo' => NULL,
                'rule_regulation_type' => NULL,
                'slug' => 'ifza',
                'status' => 1,
                'updated_at' => '2024-03-13 07:05:47',
                'uuid' => '3d2cc132-26f9-49d8-bfff-88d5c9827c48',
            ),
            2 =>
            array(
                'about' => NULL,
                'benefits' => NULL,
                'business_registration_image' => NULL,
                'business_registration_youtube_link' => NULL,
                'created_at' => '2024-02-14 08:07:23',
                'deleted_at' => NULL,
                'freezone_views_count' => 0,
                'id' => 3,
                'licence_registration_procedures_info' => NULL,
                'licence_registration_procedures_logo' => NULL,
                'licence_registration_procedures_video_link' => NULL,
                'logo' => 'freezones/1710855961.png',
                'min_package_id' => 37,
                'min_price' => '5499.00',
                'name' => 'Rakez',
                'price_calculator_comment' => NULL,
                'registration_information' => NULL,
                'rule_regulation_info' => NULL,
                'rule_regulation_logo' => NULL,
                'rule_regulation_type' => NULL,
                'slug' => 'rakez',
                'status' => 1,
                'updated_at' => '2024-03-13 07:05:47',
                'uuid' => 'b3f34b12-bca6-4163-a05f-20d5197aab2d',
            ),
        ));
    }
}
