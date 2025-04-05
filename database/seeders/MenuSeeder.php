<?php


// database/seeders/MenuSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run()
    {
        DB::table('menus')->insert([
            [
                'title' => 'Modules',
                'icon' => null,
                'route' => null,
                'parent_id' => null,
                'is_active' => true,
            ],
            [
                'title' => 'Dashboard',
                'icon' => 'fa-solid fa-gauge',
                'route' => 'dashboard',
                'parent_id' => 1, // Parent menu ID (Modules)
                'is_active' => true,
            ],
            [
                'title' => 'Manage Offers',
                'icon' => 'fa-solid fa-users',
                'route' => 'offer.index',
                'parent_id' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Manage Blogs',
                'icon' => 'fa-solid fa-users',
                'route' => 'blog.index',
                'parent_id' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Manage Categories',
                'icon' => 'fa-solid fa-users',
                'route' => 'category.index',
                'parent_id' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Manage Static Content',
                'icon' => 'fa-solid fa-users',
                'route' => 'static-page.index',
                'parent_id' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Manage Contact Us',
                'icon' => 'fa-solid fa-users',
                'route' => 'contact.index',
                'parent_id' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Customers',
                'icon' => null,
                'route' => null,
                'parent_id' => null,
                'is_active' => true,
            ],
            [
                'title' => 'Manage Customers',
                'icon' => 'fa-solid fa-users',
                'route' => 'customer.index',
                'parent_id' => 7,
                'is_active' => true,
            ],
            [
                'title' => 'Manage Package Booking Requests',
                'icon' => 'fa-solid fa-users',
                'route' => 'package-bookings.index',
                'parent_id' => 7,
                'is_active' => true,
            ],
            [
                'title' => 'Manage Transactions',
                'icon' => 'fa-solid fa-users',
                'route' => 'transaction.index',
                'parent_id' => 7,
                'is_active' => true,
            ],
            [
                'title' => 'Freezone',
                'icon' => null,
                'route' => null,
                'parent_id' => null,
                'is_active' => true,
            ],
            [
                'title' => 'Manage Freezones',
                'icon' => 'fa-solid fa-users',
                'route' => 'freezones.index',
                'parent_id' => 12,
                'is_active' => true,
            ],
            [
                'title' => 'Manage Freezone Pages',
                'icon' => 'fa-solid fa-users',
                'route' => 'freezone-page.index',
                'parent_id' => 12,
                'is_active' => true,
            ],
            [
                'title' => 'Manage Activity Groups',
                'icon' => 'fa-solid fa-folder-open',
                'route' => 'activity-group.index',
                'parent_id' => 12,
                'is_active' => true,
            ],
            [
                'title' => 'Manage Activities',
                'icon' => 'fa-solid fa-clipboard-list',
                'route' => 'activity.index',
                'parent_id' => 12,
                'is_active' => true,
            ],
            [
                'title' => 'Manage Visa Package Attribute Headers',
                'icon' => 'fa-solid fa-passport',
                'route' => 'visa-package-attribute-headers.index',
                'parent_id' => 12,
                'is_active' => true,
            ],
            [
                'title' => 'Manage Visa Package Attributes',
                'icon' => 'fa-solid fa-passport',
                'route' => 'visa-package-attributes.index',
                'parent_id' => 12,
                'is_active' => true,
            ],
            [
                'title' => 'Manage License',
                'icon' => 'fa-solid fa-users',
                'route' => 'license.index',
                'parent_id' => 12,
                'is_active' => true,
            ],
            [
                'title' => 'Freezone Packages',
                'icon' => null,
                'route' => null,
                'parent_id' => null,
                'is_active' => true,
            ],
            [
                'title' => 'Manage Packages',
                'icon' => 'fa-solid fa-users',
                'route' => 'package.index',
                'parent_id' => 20,
                'is_active' => true,
            ],
            [
                'title' => 'Manage Package Attributes',
                'icon' => 'fa-solid fa-users',
                'route' => 'attributes.index',
                'parent_id' => 20,
                'is_active' => true,
            ],
            [
                'title' => 'Manage Package Attribute Options',
                'icon' => 'fa-solid fa-tags',
                'route' => 'admin.attribute-options.index',
                'parent_id' => 20,
                'is_active' => true,
            ],
            [
                'title' => 'Fixed Fees',
                'icon' => 'fa-solid fa-money-bill-wave',
                'route' => 'fixed-fee.index',
                'parent_id' => 20,
                'is_active' => true,
            ],
            [
                'title' => 'AI Tool Search Filters',
                'icon' => 'fa-solid fa-filter',
                'route' => 'admin.ai_search_filters',
                'parent_id' => 20,
                'is_active' => true,
            ],
            [
                'title' => 'Superadmin Controls',
                'icon' => null,
                'route' => null,
                'parent_id' => null,
                'is_active' => true,
            ],
            [
                'title' => 'Subadmin',
                'icon' => 'fa-solid fa-users',
                'route' => 'subadmin-users.index',
                'parent_id' => 26,
                'is_active' => true,
            ],
            [
                'title' => 'Roles',
                'icon' => 'fa-solid fa-unlock-keyhole',
                'route' => 'roles.index',
                'parent_id' => 26,
                'is_active' => true,
            ],
            [
                'title' => 'System Setup',
                'icon' => null,
                'route' => null,
                'parent_id' => null,
                'is_active' => true,
            ],
            [
                'title' => 'Manage Groae Numbers',
                'icon' => 'fa-solid fa-users',
                'route' => 'numbers.view',
                'parent_id' => 29,
                'is_active' => true,
            ],
            [
                'title' => 'Setting',
                'icon' => 'fa-solid fa-users',
                'route' => 'setting.view',
                'parent_id' => 29,
                'is_active' => true,
            ],
            [
                'title' => 'Manage Currency',
                'icon' => 'fa-solid fa-users',
                'route' => 'currency.view',
                'parent_id' => 29,
                'is_active' => true,
            ],
        ]);
    }
}
