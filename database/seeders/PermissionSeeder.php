<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Disable foreign key checks to safely delete permissions
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('permissions')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $routes = Route::getRoutes();
        $insertedCount = 0;

        foreach ($routes as $route) {
            $middleware = $route->gatherMiddleware();

            foreach ($middleware as $mw) {
                if (Str::startsWith($mw, 'role_or_permission:')) {
                    $permissionName = Str::after($mw, 'role_or_permission:');
                    $routeName = $route->getName();

                    if (!$routeName || !$permissionName) continue;

                    // Derive base key from route name: roles.index → roles
                    $menuKey = explode('.', $routeName)[0];

                    // Find matching menu
                    $menu = Menu::where('route', $menuKey . '.index')->first();

                    // Check if permission already exists
                    $exists = DB::table('permissions')
                        ->where('name', $permissionName)
                        ->where('guard_name', 'web')
                        ->exists();

                    if ($exists) continue;

                    DB::table('permissions')->insert([
                        'uuid' => (string) Str::uuid(),
                        'name' => $permissionName,
                        'guard_name' => 'web',
                        'type' => 'menu',
                        'menu_id' => $menu?->id,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);

                    $insertedCount++;
                    echo "Inserted permission: $permissionName\n";
                }
            }
        }

        echo "$insertedCount permissions inserted successfully.\n";
    }
}
