<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert settings for manage_ai_fields_limit
        DB::table('settings')->insert([
            [
                'section_key' => 'manage_ai_fields_limit',
                'title' => 'min',
                'value' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'section_key' => 'manage_ai_fields_limit',
                'title' => 'max',
                'value' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more settings as needed
        ]);
    }
}
