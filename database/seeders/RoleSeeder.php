<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::firstOrCreate([
            'name' => 'superadmin',
            'type' => 'superadmin',
        ]);

        Role::firstOrCreate([
            'name' => 'freezone admin',
            'type' => 'freezoneadmin',
        ]);
    }
}
