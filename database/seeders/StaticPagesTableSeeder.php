<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StaticPagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('static_pages')->delete();
        
        \DB::table('static_pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'uuid' => '18ed3518-b886-4e5f-8390-e12d5093368d',
                'page_name' => 'about us',
                'description' => '<p>Test Description</p>',
                'image' => 'public/freezone/static_page/1708601562_about-image.png',
                'slug' => 'about-us',
                'created_at' => '2024-02-22 11:32:42',
                'updated_at' => '2024-02-22 11:32:56',
            ),
            1 => 
            array (
                'id' => 2,
                'uuid' => 'd0efc10e-285b-4f30-a328-5b4f1fc76f0c',
                'page_name' => 'career',
                'description' => '<p><a href="http://127.0.0.1:8000/privacy-policy">Career</a></p>',
                'image' => 'public/freezone/static_page/1708601660_glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour.png',
                'slug' => 'career',
                'created_at' => '2024-02-22 11:34:20',
                'updated_at' => '2024-02-22 11:42:43',
            ),
            2 => 
            array (
                'id' => 3,
                'uuid' => 'aa215090-00e9-4482-9cb4-32a7dc1d48d0',
                'page_name' => 'privacy policy',
                'description' => '<p>Test privacy policy</p>',
                'image' => 'public/freezone/static_page/1708602208_panorama-down-town-dubai-modern-city-night.png',
                'slug' => 'privacy-policy',
                'created_at' => '2024-02-22 11:43:28',
                'updated_at' => '2024-02-22 11:48:16',
            ),
            3 => 
            array (
                'id' => 4,
                'uuid' => '33665c36-22cd-4c3b-86fa-4a33cd3f318d',
                'page_name' => 'government policy',
                'description' => '<p><a href="http://127.0.0.1:8000/">Government Policy</a></p>',
                'image' => 'public/freezone/static_page/1708602245_panorama-down-town-dubai-modern-city-night.png',
                'slug' => 'government-policy',
                'created_at' => '2024-02-22 11:44:05',
                'updated_at' => '2024-02-22 11:48:04',
            ),
            4 => 
            array (
                'id' => 5,
                'uuid' => '336e14b4-40e8-4914-a9e7-b89b51ce0a51',
                'page_name' => 'terms & conditions',
                'description' => '<p><a href="http://127.0.0.1:8000/">Terms &amp; conditions</a></p>',
                'image' => 'public/freezone/static_page/1708602331_modern-business-buildings-financial-district-2.png',
                'slug' => 'terms-and-conditions',
                'created_at' => '2024-02-22 11:45:31',
                'updated_at' => '2024-02-22 11:47:48',
            ),
            5 => 
            array (
                'id' => 6,
                'uuid' => '3f9438c5-1f4a-412b-8868-72b27d0cdec6',
                'page_name' => 'faq’s',
                'description' => '<p><a href="http://127.0.0.1:8000/">FAQ’s</a></p>',
                'image' => 'public/freezone/static_page/1708602373_modern-business-buildings-financial-district-2.png',
                'slug' => 'faq',
                'created_at' => '2024-02-22 11:46:13',
                'updated_at' => '2024-02-22 11:47:36',
            ),
            6 => 
            array (
                'id' => 7,
                'uuid' => '84f2138e-7037-422c-95d7-2c79a803850f',
                'page_name' => 'why groae',
                'description' => '<p>why groae description</p>',
                'image' => 'public/freezone/static_page/1708603736_office-buildings.png',
                'slug' => 'why-groae',
                'created_at' => '2024-02-22 12:08:56',
                'updated_at' => '2024-02-22 12:21:05',
            ),
        ));
        
        
    }
}