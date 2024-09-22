<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->delete();

        \DB::table('categories')->insert(array(
            0 =>
            array(
                'created_at' => now(),
                'description' => 'Technology Description',
                'id' => 1,
                'name' => 'Technology',
                'parent_id' => 0,
                'slug' => 'technology',
                'status' => 1,
                'updated_at' => now(),
            ),
            1 =>
            array(
                'created_at' => now(),
                'description' => 'Travel Description',
                'id' => 2,
                'name' => 'Travel',
                'parent_id' => 0,
                'slug' => 'travel',
                'status' => 1,
                'updated_at' => now(),
            ),
            2 =>
            array(
                'created_at' => now(),
                'description' => 'Food and Cooking Description',
                'id' => 3,
                'name' => 'Food and Cooking',
                'parent_id' => 0,
                'slug' => 'food_and_cooking',
                'status' => 1,
                'updated_at' => now(),
            ),
            3 =>
            array(
                'created_at' => now(),
                'description' => 'Health and Wellness Description',
                'id' => 4,
                'name' => 'Health and Wellness',
                'parent_id' => 0,
                'slug' => 'health_and_wellness',
                'status' => 1,
                'updated_at' => now(),
            ),
            4 =>
            array(
                'created_at' => now(),
                'description' => 'Fashion Description',
                'id' => 5,
                'name' => 'Fashion',
                'parent_id' => 0,
                'slug' => 'fashion',
                'status' => 1,
                'updated_at' => now(),
            ),
            5 =>
            array(
                'created_at' => now(),
                'description' => 'Lifestyle Description',
                'id' => 6,
                'name' => 'Lifestyle',
                'parent_id' => 0,
                'slug' => 'lifestyle',
                'status' => 1,
                'updated_at' => now(),
            ),
            6 =>
            array(
                'created_at' => now(),
                'description' => 'Finance Description',
                'id' => 7,
                'name' => 'Finance',
                'parent_id' => 0,
                'slug' => 'finance',
                'status' => 1,
                'updated_at' => now(),
            ),
            7 =>
            array(
                'created_at' => now(),
                'description' => 'DIY and Crafts Description',
                'id' => 8,
                'name' => 'DIY and Crafts',
                'parent_id' => 0,
                'slug' => 'diy_and_crafts',
                'status' => 1,
                'updated_at' => now(),
            ),
            8 =>
            array(
                'created_at' => now(),
                'description' => 'Books and Literature Description',
                'id' => 9,
                'name' => 'Books and Literature',
                'parent_id' => 0,
                'slug' => 'books_and_literature',
                'status' => 1,
                'updated_at' => now(),
            ),
            9 =>
            array(
                'created_at' => now(),
                'description' => 'Gaming Description',
                'id' => 10,
                'name' => 'Gaming',
                'parent_id' => 0,
                'slug' => 'gaming',
                'status' => 1,
                'updated_at' => now(),
            ),
            10 =>
            array(
                'created_at' => now(),
                'description' => 'Education Description',
                'id' => 11,
                'name' => 'Education',
                'parent_id' => 0,
                'slug' => 'education',
                'status' => 1,
                'updated_at' => now(),
            ),
            11 =>
            array(
                'created_at' => now(),
                'description' => 'Environment and Sustainability Description',
                'id' => 12,
                'name' => 'Environment and Sustainability',
                'parent_id' => 0,
                'slug' => 'environment_and_sustainability',
                'status' => 1,
                'updated_at' => now(),
            ),
        ));
    }
}
