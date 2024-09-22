<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuperUserSetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();

        $user1 = new User;
        $user1->name = 'Admin';
        $user1->email = 'admin@groae.com';
        $user1->password = bcrypt('123123123');
        $user1->user_type = 'superadmin';
        $user1->uuid = Str::uuid();
        $user1->save();

        $user2 = new User;
        $user2->name = 'Brij';
        $user2->email = 'brij@yopmail.com';
        $user2->password = bcrypt('123123123');
        $user2->user_type = 'superadmin';
        $user2->uuid = Str::uuid();
        $user2->save();

        $user3 = new User;
        $user3->name = 'Shouvik';
        $user3->email = 'shouvik@yopmail.com';
        $user3->password = bcrypt('password');
        $user3->user_type = 'superadmin';
        $user3->uuid = Str::uuid();
        $user3->save();

        $user4 = new User;
        $user4->name = 'Admin';
        $user4->email = 'sakshi@yopmail.com';
        $user4->password = bcrypt('password');
        $user4->user_type = 'superadmin';
        $user4->uuid = Str::uuid();
        $user4->save();

        $superadminRole = Role::where('type', 'superadmin')->where('name', 'superadmin')->first();
        $user1->assignRole($superadminRole);
        $user2->assignRole($superadminRole);
        $user3->assignRole($superadminRole);
        $user4->assignRole($superadminRole);
    }
}
